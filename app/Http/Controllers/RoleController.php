<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB as FacadesDB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permission = Permission::get();
        
        // $test= Role::findByName('Admin')->permissions->pluck('name');
        // Permission::whereName('Admin')->first()->roles;
        if($request->name){
            $check = Role::findByName($request->name)->permissions->pluck('id');
            $checked = json_decode(json_encode($check), true);
        }else{
            $checked = [];
        }
        // dd(json_encode($checked));

        // dd($test);
        $roles = Role::orderBy('id','DESC')->paginate(5);
       
        return view('roles.index',compact('roles', 'permission', 'checked'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request->input('permissions'));
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required',
        ]);

        FacadesDB::beginTransaction();
        try {
            $role = Role::create(['name' => $request->input('name')]);
            $role->syncPermissions($request->input('permissions'));

            $request->session()->flash('success','Role created successfully!');

            // return redirect()->route('roles.index')
            //     ->with('success','Role created successfully');
            FacadesDB::commit();

            return response()->json(200);

        } catch (\Throwable $th) {
            FacadesDB::rollBack();
            return response()->json(400);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $permission = Permission::get();
        $check = Role::findByName($request->name)->permissions->pluck('id')->toArray();
        // $test= Role::findByName('Admin')->permissions->pluck('name');
        // Permission::whereName('Admin')->first()->roles;
        $checked = json_decode(json_encode($check), true);

        $roles = Role::orderBy('id','DESC')->paginate(5);
        $checked = [5, 6];
        // dd($test);
        return view('roles.index',compact('roles', 'permission', 'checked'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

        // return view('roles.index',compact('checked'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
