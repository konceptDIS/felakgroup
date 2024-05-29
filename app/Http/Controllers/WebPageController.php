<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function home(){
        $posts = Post::latest()->get();
        return view('home', compact('posts'));
    }

    public function about(){
        return view('about');
    }

    public function team(){
        return view('team');
    }

    public function subsidiaries(){
        return view('subsidiaries');
    }

    public function csr(){
        return view('csr');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }
}
