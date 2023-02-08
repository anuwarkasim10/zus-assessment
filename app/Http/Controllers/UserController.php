<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
// use DataTables;
use Yajra\DataTables\DataTables;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::all();
        $from = Carbon::parse($request->get('filter_from'));
        $to_at = Carbon::parse( $request->get('filter_to'));
        $to = $to_at->format('Y-m-d 23:59:59');

        if ($request->ajax()) {
            $data = User::select('*');

            if(!empty($request->filter_from)){
                $data->whereBetween('created_at', array($from, $to))
                ->get();
            }

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $user = auth()->user();
                        $btn = '<a href="javascript:void(0)" id="show" class="show btn btn-primary btn-sm" data-id="'.$data->id.'" data-name="'.$data->name.'" data-phone="'.$data->phone_no.'" data-email="'.$data->email.'" data-role="'.preg_replace('/[^A-Za-z0-9\-]/', '', $data->getRoleNames()).'" data-bs-toggle="modal" data-bs-target="#showUserModal">View</a>';
                        if ($user->can('user-edit')) {
                            $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-warning btn-sm" data-id="'.$data->id.'" data-name="'.$data->name.'" data-phone="'.$data->phone_no.'" data-email="'.$data->email.'" data-role="'.preg_replace('/[^A-Za-z0-9\-]/', '', $data->getRoleNames()).'" data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</a>';
                        }
                        if ($user->can('user-delete')) {
                            $btn = $btn.'<a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="'.$data->id.'" data-name="'.$data->name.'" data-bs-toggle="modal" data-bs-target="#deleteUserModal">Delete</a>';
                        }
                        return $btn;
                })
                ->addColumn('role', function($data){
                   $role = preg_replace('/[^A-Za-z0-9\-]/', '', $data->getRoleNames());
                   return $role;
                })
                ->editColumn('created_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('Y-m-d H:i:s'); return $formatedDate; })
                ->rawColumns(['action','role'])
                ->order(function ($data) {
                    $data->orderBy('created_at', 'desc');
                })
                ->make(true);
        }

        return view('users.index' , compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'phone_no' => 'numeric|unique:users,phone_no|digits_between:10,11',

        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->messages();
            if(isset($error['name'][0])){
                $message = array('message' => $error['name'][0], 'title' => 'Failed!');
            }elseif(isset($error['email'][0])){
                $message = array('message' => $error['email'][0], 'title' => 'Failed!');
            }elseif(isset($error['phone_no'][0])){
                $message = array('message' => $error['phone_no'][0], 'title' => 'Failed!');
            }elseif(isset($error['roles'][0])){
                $message = array('message' => $error['roles'][0], 'title' => 'Failed!');
            }elseif(isset($error['password'][0])){
                $message = array('message' => $error['password'][0], 'title' => 'Failed!');
            }

            return response()->json($message, 400);
        }

        try {
            $input = $request->all();
            $input['password'] = FacadesHash::make($input['password']);
            $user = User::create($input);
            $user->assignRole($request->input('roles'));

            $message = array('message' => 'New User created successfully!', 'title' => 'Success!');
            return response()->json($message);
            // return back()->with('success', 'Success! User created');
        } catch (\Throwable $th) {
            $message = array('message' => 'Failed to create New User!', 'title' => 'Failed!');
            return response()->json($message);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email:rfc,dns',
            'phone_no' => 'numeric|digits_between:10,11'
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->messages();
            if(isset($error['name'][0])){
                $message = array('message' => $error['name'][0], 'title' => 'Failed!');
            }elseif(isset($error['email'][0])){
                $message = array('message' => $error['email'][0], 'title' => 'Failed!');
            }elseif(isset($error['phone_no'][0])){
                $message = array('message' => $error['phone_no'][0], 'title' => 'Failed!');
            }elseif(isset($error['roles'][0])){
                $message = array('message' => $error['roles'][0], 'title' => 'Failed!');
            }elseif(isset($error['password'][0])){
                $message = array('message' => $error['password'][0], 'title' => 'Failed!');
            }
        }

        try{
            $user = User::find($id);
            $user->name = $request->name;

            if( $user->email != $request->email){
                $user->email = $request->email;
            }if($user->phone_no != $request->phone_no){
                $user->phone_no = $request->phone_no;
            }
            $user->save();
            $message = array('message' => 'User updated successfully!', 'title' => 'New User Added!');
            return response()->json($message);
        }catch (\Throwable $th) {
            $message = array('message' => 'Failed to create updated User!', 'title' => 'Failed!');
            return response()->json($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = User::find($id);
            $user->delete();
            $message = array('message' => 'User deleted successfully!', 'title' => 'New User Added!');
            return response()->json($message);
        }catch (\Throwable $th) {
            $message = array('message' => 'Failed to create updated User!', 'title' => 'Failed!');
            return response()->json($message);
        }
    }
}
