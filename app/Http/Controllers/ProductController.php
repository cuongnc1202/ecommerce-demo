<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('name','price','sale_price','description','category_id','status');

        $file_name = $request->image->getClientOriginalName();
        if ($request->image->move(public_path('/uploads'), $file_name)) {
            $data['image'] = $file_name;
            Product::create($data);
            return redirect()->route('product.index')->with('true', 'Thực hiện thành công!');
        }
        return redirect()->back()->with('false', 'Thực hiện thất bại!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::all();
       return view('admin.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->only('name','price','sale_price','image','description','category_id','status');
        if ($request->has('image')) {
            $file_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('/uploads'), $file_name);
            $data['image'] = $file_name;
        } else {
            $data['image'] = $product['image'];
        }
        if ($product->update($data)) {
            return redirect()->route('product.index')->with('true', 'Thực hiện thành công!');
        }
        return redirect()->back()->with('false', 'Thực hiện thất bại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('true', 'Thực hiện thành công!');
    }
}
