<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $menProducts = Product::where('featured', true)->where('product_category_id', 1)->get();
        $womenProducts = Product::where('featured', true)->where('product_category_id', 2)->get();

        //cách kiểm tra câu lệnh dc thực hiện ko và sửa lỗi
//        dd($menProducts);

        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();

        return view('front.index', compact('menProducts', 'womenProducts','blogs'));
    }
}
