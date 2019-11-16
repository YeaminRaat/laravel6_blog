<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.manageCategory', ['category'=>$category, 'sl'=>1]);
        //return view('admin.manageCategory')->with('category'=>$category, 'sl'=>1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categoryName' => 'required|alpha|unique:categories|max:50',
        ]);
        if ($validator->fails()){
            return redirect('admin/category/create')->withErrors($validator)->withInput();
        }

        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->status = $request->status;

        $category->save();

        return redirect('/admin/category')->with('message', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryShow = Category::find($id);
        if ($categoryShow){
            return view('admin.editCategory')->with('data', $categoryShow);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'categoryName' => 'required|alpha|max:50',
        ]);
        if ($validator->fails()){
            return redirect('admin/category/'.$id.'/edit')->withErrors($validator)->withInput();
        }

        $category = Category::find($id);
        $category->categoryName = $request->categoryName;
        $category->status = $request->status;

        $category->save();

        return redirect('/admin/category')->with('message', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::find($id)->delete();
        if ($delete){
            return redirect()->back()->with('message', 'Category Deleted.');
        }
    }
    /**
     * Manually created function to change status
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $status = Category::find($id);
        if ($request->active == 1){
            $status->status = 0;
        }else{
            $status->status = 1;
        }

        $status->save();

        return redirect('/admin/category')->with('message', 'Status Updated Successfully');

    }
}
