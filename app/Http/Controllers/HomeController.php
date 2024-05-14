<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')
        ->where('home', 'Yes')
        ->whereDate('blog_date', '<=' , date('Y-m-d'))
        ->where('status', 'Active')
        ->limit(4)
        ->get();

        return view('home.index', compact('blogs'));
    }

    public function blog()
    {
        $blogs = Blog::OrderBy('id', 'DESC')
        ->whereDate('blog_date', '<=' , date('Y-m-d'))
        ->where('status', 'Active')
        ->paginate(15);
        return view('home.blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blogs = Blog::OrderBy('id', 'DESC')->where('status', 'Active')->limit(10)->get();
        $blog = Blog::find($id);
        return view('home.blog.single', compact('blog', 'blogs'));
    }
}