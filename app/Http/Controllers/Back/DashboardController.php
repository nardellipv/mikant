<?php

namespace App\Http\Controllers\Back;

use App\ModelBack\Blog;
use App\ModelBack\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('date_end', 'DESC')
            ->take(10)
            ->paginate(5);

        $lastPosts = Blog::orderBy('created_at', 'DESC')
            ->take(4)
            ->get();

        return view('back.dashboard', compact('projects', 'lastPosts'));
    }
}
