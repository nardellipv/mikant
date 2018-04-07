<?php

namespace App\Http\Controllers\Front;

use App\ModelFront\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function home()
    {
        $publications = Blog::take(3)
            ->get();

        return view('front.home', compact('publications'));
    }
}
