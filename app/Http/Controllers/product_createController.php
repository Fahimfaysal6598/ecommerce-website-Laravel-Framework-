<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\product;
use DB;

class product_createController extends Controller
{

    public function home()
    {
   
     return view('welcome');

    }

    public function product_create()
    {
   
     return view('product_create');

    }

    public function product_store(Request $request)
    {   
    request()->validate([
        'product_name'  => 'required', 
        'category_name'  => 'required', 
        'brand_name'  => 'required',
        'description'  => 'required',        
        'image'  => 'required',
        'status'  => 'required'            
        ]);    
    Product::create($request->all());

    return redirect()->route('product_create')
                        ->with('success','Product created successfully.');                  

    }


    public function product_view()
    {
    $products = Product::orderBy('id','ASC')->paginate(500);
        return view('product_view',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function product_edit($id)
    {        
    $id;
    $product = DB::table('products')->where('id', $id)->first();
    return view('product_edit',compact('product'));        
    }




    public function product_update(Request $request , product $product)
    {

        request()->validate([            
        'product_name'  => 'required', 
        'category_name'  => 'required', 
        'brand_name'  => 'required',
        'description'  => 'required',        
        'image'  => 'required',
        'status'  => 'required'            
        ]);

     $product_name = $request->get('product_name');
     $category_name = $request->get('category_name');
     $brand_name = $request->get('brand_name');
     $description = $request->get('description');
     $image = $request->get('image');
     $status = $request->get('status');
     $id = $request->get('id');

     DB::table('products')
    ->where('id', $id)
    ->update(
        ['product_name' => $product_name,
         'category_name' => $category_name,
         'brand_name' => $brand_name,
         'description' => $description,
         'image' => $image,
         'status' => $status,
      ]);
    $products = product::all();
    return view('product_view',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }


    public function product_del($id)
    {       
        DB::table('products')->where('id', $id)->delete();

    $products = product::all();
    return view('product_view',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    




}
