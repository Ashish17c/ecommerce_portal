<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SubcategoryController extends Controller
{
    public function detail($category,$sub_category){

        $sub_cat_id = Category::where('c_name', $sub_category)->first();

        // dd($sub_cat_id);
        $products = Product::where('category_id', $sub_cat_id->p_c_id)->limit(4)->get();
       // $products = Product::where('category_id', $sub_cat_id->c_id)->limit(4)->get();

        return view('subcategory',compact('products','category','sub_category'));
    }
}
