<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function home(Request $req)
    {
        $keyword = $req->keyword;
        if ($keyword) {
            $data = Product::where('name','like','%'.$keyword.'%')->paginate();
        } 
        $newProduct = Product::orderBy('id','DESC')->limit(3)->get();
        $randomProduct = Product::inRandomOrder()->limit(8)->get();
        $topProduct = Product::inRandomOrder()->limit(3)->get();
        $rateProduct = Product::inRandomOrder()->limit(3)->get();
        return view('site.home', compact('newProduct','randomProduct','topProduct','rateProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productDetail(Product $product)
    {
        $rateProduct = Product::inRandomOrder()->where('category_id', $product->category_id)->limit(4)->get();
        return view('site.product-detail', compact('product','rateProduct'));

        
    }
    public function category(Category $category)
    {
        $products = $category->products()->paginate();
        return view('site.category', compact('products', 'category'));
    }
    public function productList()
    {
        $data = Product::orderBy('id', 'DESC')->paginate(8);
        return view('site.shop', compact('data'));
    }
    public function blog()
    {
        return view('site.blog');
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function shop()
    {
        return view('site.shop');
    }
    public function shopDemo()
    {
        return view('site.shopdemo');
    }

    
}
