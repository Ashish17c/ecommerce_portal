<?php

namespace App\Http\Controllers\vendor;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproduct(){
        $category= Category::all();
        return view('vendor/add-product',compact('category'));
    }

    public function createproduct(Request $request){
       $request->validate([
            "product_name" => "required",
            "product_price" => "required",
            "category_id" => "required",
            "product_stock" => "required",
            "product_description" => "required",
            "product_image" => "required",
       ]);

       Product::create([
            "vendor_id" => session('vendorId'),
            "product_name" => $request->product_name,
            "product_price" => $request->product_price,
            "category_id" => $request->category_id,
            "product_stock" => $request->product_stock,
            "product_description" => $request->product_description,
            "product_image" => $request->file('product_image')->store('products', 'public')
            // "product_image" => '1.jpg'

        ]);
       return redirect('vendor/add-product')->with('msg','Product Add Successfully ');
    }

    public function viewproduct(){
        $products = Product::all();
        return view('vendor/view-product',compact('products'));
    }

    public function editproduct($p_id){
        $product = Product::find($p_id);
        $category= Category::all();
        return view('vendor/edit-product',compact('product','category'));
    }


    public function updateproduct(Request $request,$p_id){
        $product = Product::find($p_id);

    //     $image = Product->product_image
    // if ($request->hasFile('product_image')){
    //         $image = $request->file('product_image')->store('products', 'public');
    //     }

        $product->update([
            "product_name" => $request->product_name,
            "product_price" => $request->product_price,
            "category_id" => $request->category_id,
            "product_stock" => $request->product_stock,
            "product_description" => $request->product_description,
            // "product_image" => $image;

        ]);

        return redirect('vendor/view-product')->with('msg','Product Update Successfully. ');
    }


        public function deleteproduct($p_id){
        $product = Product::find($p_id);
        $product->delete();
        return redirect('vendor/view-product')->with('msg','Product Deleted Successfully');
    }
}
