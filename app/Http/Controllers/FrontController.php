<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        $Blog = Blog::where('status',1)
            ->orderBy('created_at', 'desc')
            ->get();
        $category = Category::where('status',1)->get();
        return view('index', ['blog' => $Blog, 'category' => $category]);
    }

    public function viewSingleBlog($id)
    {
        //$blog = Blog::find($id);
        $blog = Blog::where('id', $id)->get();
        $category = Category::where('status',1)->get();
        return view('singleBlog', ['blog' => $blog, 'category' => $category]);
    }

    public function viewBlogByCategory($id)
    {
        $listBlog = Blog::where('cat_id', $id)
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        $category = Category::where('status',1)->get();
        return view('categoryWiseBlog', ['blog'=>$listBlog, 'category' => $category]);
    }
}
