<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function detail($category){
        $cat_id= Category::where('c_name', $category)->first();

       // dd($cat_id);
        $products= Product::where('category_id',$cat_id->c_id)->get();

        return view('category',compact('products','category'));
    }
}
