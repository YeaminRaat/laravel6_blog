<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$blog = Blog::all();
        $blog = DB::select("SELECT blogs.*, categories.categoryName FROM blogs INNER JOIN categories ON blogs.cat_id = categories.id ORDER BY id DESC");
        return view('admin.manageBlog', ['blog'=>$blog, 'sl'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        return view('admin.addBlog')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$validator = Validator::make($request->all(), [
            'blog_title' => 'required|alpha|max:150',
            'blog_content'=> 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()){
            return redirect('admin/blog/create')->withErrors($validator)->withInput();
        }*/

        if ($files = $request->file('photo')){
            // for save original image
            $fileName = $files->getClientOriginalName();
            $directory = 'public/uploads/images/';
            $imageUrl = $directory.time().$fileName;
            Image::make($files)->save($imageUrl);
        }
        $blog = new Blog();

        $blog->cat_id = $request->categoryId;
        $blog->title = $request->blog_title;
        $blog->content = $request->blog_content;
        $blog->photo = $imageUrl;
        $blog->uploader_name = Auth::user()->name;
        $blog->status = $request->status;
        $blog->save();
        return redirect('/admin/blog')->with('message', 'Blog Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $category = Category::all();
        return view('admin.editBlog', ['blog'=>$blog, 'category'=>$category]);
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
        /*$validator = Validator::make($request->all(), [
            'blog_title' => 'required|alpha|max:150',
            'blog_content'=> 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()){
            return redirect('admin/blog/create')->withErrors($validator)->withInput();
        }*/

        $blog = Blog::find($id);

        if ($files = $request->file('photo')){
            // for save original image
            unlink($blog->photo);
            $fileName = $files->getClientOriginalName();
            $directory = 'public/uploads/images/';
            $imageUrl = $directory.time().$fileName;
            Image::make($files)->save($imageUrl);

            $blog->photo = $imageUrl;
        }


        $blog->cat_id = $request->categoryId;
        $blog->title = $request->blog_title;
        $blog->content = $request->blog_content;

        $blog->status = $request->status;
        $blog->save();
        return redirect('/admin/blog')->with('message', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Blog::find($id);
        $filePath = $delete->photo;
        if ($delete->delete()){
            unlink($filePath);
            return redirect()->back()->with('message', 'Blog Deleted.');
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
        $status = Blog::find($id);
        if ($request->active == 1){
            $status->status = 0;
        }else{
            $status->status = 1;
        }

        $status->save();

        return redirect('/admin/blog')->with('message', 'Status Updated Successfully');

    }
}
