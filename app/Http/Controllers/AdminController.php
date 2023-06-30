<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_product(){
        return view('admin.product');
    }

    public function add_product(Request $request){


        $product=new product;

        $product->title=$request->title;

        $product->description=$request->description;

        $product->starting_price=$request->starting_price;

        $product->start_date=$request->start_date;

        $product->end_date=$request->end_date;



        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $product->image=$imagename;




        $product->save();


        return redirect()->back()->with('message','Product added successfully');
    }

    public function show_product(){
$product=product::all();

        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id){
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product deleted successfully');
    }

    public function update_product($id){
        $product=product::find($id);

return view('admin.update_product',compact('product'));

    }

    public function update_product_confirm(Request $request,$id){

        $product=product::find($id);

        $product->title=$request->title;

        $product->active=$request->active;

        $product->description=$request->description;

        $product->starting_price=$request->starting_price;

        $product->start_date=$request->start_date;

        $product->end_date=$request->end_date;

        $image=$request->image;

        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
    
            $product->image=$imagename;

        }
      


        $product->save();

        return redirect()->back()->with('message','Product updated successfully');
    }
    public function deliveredProducts()
{
    $products = Product::where('delivery', 1)
                       
                       ->where('active', 0)
                       
                       ->get();

    return view('admin.delivered-products', compact('products'));
}
public function delivered()
{
    $products = Product::where('delivery', 2)
                       ->where('active', 0)
                       ->get();

    return view('admin.delivered', compact('products'));
}
}
