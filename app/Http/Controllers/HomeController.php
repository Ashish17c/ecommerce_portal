<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;

class HomeController extends Controller
{
   public function index(){
    $banners= Banner::all();
    $recent= Product::limit(4)->get();
    $products= Product::limit(4)->get();
    $popular= Product::latest()->limit(4)->get();
    $electronics= Product::where('category_id', 2)->limit(4)->get();
    return view('home',compact('banners','products','electronics','popular','recent'));
   }
}
