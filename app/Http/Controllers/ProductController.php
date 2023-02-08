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
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
// use DataTables;
use Yajra\DataTables\DataTables;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','store']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $tags = Tag::all();
        $filter_name = $request->get('filter_name');
        $filter_tag = $request->get('filter_tag');
        $filter_status = $request->get('filter_status');

        if ($request->ajax()) {
            if(!empty($request->filter_name) && !empty($request->filter_status) && !empty($request->filter_tag)){

                $product = Product::where('name','like', '%'.$request->filter_name.'%')->where('status', $request->filter_status)->get();
                $data = new Collection();
                foreach($product as $p){
                    if(str_contains($p->tags_id, $request->filter_tag)){
                        $data->push($p);
                    }
                }
            }elseif(!empty($request->filter_name) && !empty($request->filter_status)){
                $data = Product::where('status', $request->filter_status)->where('name','like', '%'.$request->filter_name.'%')->get();
            }elseif(!empty($request->filter_name) && !empty($request->filter_tag)){
                $product = Product::where('name','like', '%'.$request->filter_name.'%')->get();
                $data = new Collection();
                foreach($product as $p){
                    if(str_contains($p->tags_id, $request->filter_tag)){
                        $data->push($p);
                    }
                }
            }elseif(!empty($request->filter_status) && !empty($request->filter_tag)){
                $product = Product::where('status', $request->filter_status)->get();
                $data = new Collection();
                foreach($product as $p){
                    if(str_contains($p->tags_id, $request->filter_tag)){
                        $data->push($p);
                    }
                }
            }elseif(!empty($request->filter_name)){
                $data = Product::where('name','like', '%'.$request->filter_name.'%')->get();
            }elseif(!empty($request->filter_status)){
                $data = Product::where('status', $request->filter_status)->get();
            }elseif(!empty($request->filter_tag)){

                $product = Product::get();
                $data = new Collection();
                foreach($product as $p){
                    if(str_contains($p->tags_id, $request->filter_tag)){
                        $data->push($p);
                    }
                }
            }else{

                $data = Product::select('*');

            }
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $user = auth()->user();
                    $urlShow = url('api/product/'.$data->id);
                    $btn = '<a href="'.$urlShow.'" id="show" class="show btn btn-primary btn-sm">View</a>';
                    if ($user->can('product-edit')) {
                        $urlEdit =  url('api/product/'.$data->id.'/edit');
                        $btn = $btn.'<a href="'.$urlEdit.'" data-photo="'.$data->photo.'" class="edit btn btn-warning btn-sm" >Edit</a>';
                    }
                    if ($user->can('product-delete')) {
                        $btn = $btn.'<a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="'.$data->id.'" data-name="'.$data->name.'" data-bs-toggle="modal" data-bs-target="#deleteUserModal">Delete</a>';
                    }
                    return $btn;
                })
                ->addColumn('product_image', function ($data) {
                    $url= $data->image ? asset('/product/'.$data->image) : asset('/product/no_image.jpg');
                    return '<img src="'.$url.'" border="0" width="100" class="img-rounded" align="center" />';
                })
                ->addColumn('tags', function($data){
                    $tags_decode = json_decode($data->tags_id);
                    return $tags_decode;
                })
                ->editColumn('created_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('Y-m-d H:i:s'); return $formatedDate; })
                ->rawColumns(['action', 'product_image', 'tags'])
                ->make(true);
        }

        return view('product.index' , compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('product.create' , compact('tags'));
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
            'price' => 'required|numeric',
            'status' => 'required|',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->messages();
            if(isset($error['name'][0])){
                $message = array('message' => $error['name'][0], 'title' => 'Failed!');
            }elseif(isset($error['price'][0])){
                $message = array('message' => $error['price'][0], 'title' => 'Failed!');
            }elseif(isset($error['status'][0])){
                $message = array('message' => $error['status'][0], 'title' => 'Failed!');
            }

            return response()->json($message, 400);
        }

        try {
            $tags = explode(",", $request->tags);
            $tagsEncoded = json_encode($tags);
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            if($request->file('image')){
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('product'), $filename);
                $product->image = $filename ? $filename : null;
            }
            $product->description = $request->description ? $request->description : null;
            $product->tags_id = $tagsEncoded;
            $product->status = $request->status;
            $product->save();
            $message = array('message' => 'New Product created successfully!', 'title' => 'Success!');
            return response()->json($message);
        } catch (\Throwable $th) {
            $message = array('message' => 'Failed to create New Product!', 'title' => 'Failed!');
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
        $product = Product::find($id);
        $tag_decode = json_decode($product->tags_id);
        $tags = Tag::all();
        return view('product.show' , compact('tags', 'product', 'tag_decode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $tag_decode = json_decode($product->tags_id);
        $tags = Tag::all();

        return view('product.edit' , compact('tags', 'product', 'tag_decode'));
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
            'price' => 'required|numeric',
            'status' => 'required|',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->messages();
            if(isset($error['name'][0])){
                $message = array('message' => $error['name'][0], 'title' => 'Failed!');
            }elseif(isset($error['price'][0])){
                $message = array('message' => $error['price'][0], 'title' => 'Failed!');
            }elseif(isset($error['status'][0])){
                $message = array('message' => $error['status'][0], 'title' => 'Failed!');
            }

            return response()->json($message, 400);
        }

        try {
            $tags = explode(",", $request->tags);
            $tagsEncoded = json_encode($tags);
            $product = Product::find($id);
            $product->name = $request->name ? $request->name : $product->name;
            $product->price = $request->price ? $request->price : $product->price;
            if($request->file('image')){
                $file = $request->file('image');
                if($product->image != $file->getClientOriginalName()){
                    $filename = date('YmdHi').$file->getClientOriginalName();
                    $file-> move(public_path('product'), $filename);
                    $product->image = $filename ? $filename : null;
                }
            }
            $product->description = $request->description ? $request->description : $product->description;
            $product->tags_id = $tagsEncoded;
            $product->status = $request->status ? $request->status : $product->status;
            $product->save();
            $message = array('message' => 'Product updated successfully!', 'title' => 'Success!');
            return response()->json($message);
        } catch (\Throwable $th) {
            $message = array('message' => 'Failed to update Product!', 'title' => 'Failed!');
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
            $user = Product::find($id);
            $user->delete();
            $message = array('message' => 'Product deleted successfully!', 'title' => 'New User Added!');
            return response()->json($message);
        }catch (\Throwable $th) {
            $message = array('message' => 'Failed to delete product!', 'title' => 'Failed!');
            return response()->json($message);
        }
    }
}
