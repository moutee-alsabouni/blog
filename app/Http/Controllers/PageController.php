<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function home()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(6)->get();

        // $posts = Post::where('title', 'like', '%post%')->orderBy('created_at', 'desc')->limit(6)->get();


        return view('pages.home', ['posts' => $posts]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function settings()
    {
        return view('pages.settings');
    }

}
