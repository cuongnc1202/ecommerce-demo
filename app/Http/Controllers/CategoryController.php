<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Category::orderBy('id', 'DESC')->get();
        $keyword = $request->keyword;
        if ($keyword) {
            $data = Category::where('name','like','%'.$keyword.'%')->paginate();
        }
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = [
        //     'name' => 'Admin Manager',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456')
        // ];
        // User::create($user);
        // dd($user);
        $data = $request->only('name', 'status');
        $file_name = $request->image->getClientOriginalName();
        if ($request->image->move(public_path('uploads'), $file_name)) {
            $data['image'] = $file_name;
            Category::create($data);
            return redirect()->route('category.index')->with('true', 'Thực hiện thành công!');
        }
        return redirect()->back()->with('false', 'Thực hiện thất bại!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->only('name','status');
        if ($request->has('image')) {
            $file_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('/uploads'), $file_name);
            $data['image'] = $file_name;
        } else {
            $data['image'] = $category['image'];
        }
        if ($category->update($data)) {
            return redirect()->route('category.index')->with('true', 'Thực hiện thành công!');
        }
        return redirect()->back()->with('false', 'Thực hiện thất bại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
       if ($category->delete()) {
        return redirect()->route('category.index')->with('true', 'Thực hiện thành công!');
    }
    return redirect()->back()->with('false', 'Thực hiện thất bại!');    
    }
}
