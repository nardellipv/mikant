<?php

namespace App\Http\Controllers\Front;

use App\ModelFront\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
        $publications = Blog::orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('front.blog', compact('publications'));
    }

    public function single($slug)
    {
        $post = Blog::where('slug', $slug)
            ->first();

        return view('front.layouts.blog.single', compact('post'));
    }

    public function home()
    {
        $publications = Blog::take(3)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('front.home', compact('publications'));
    }
}
