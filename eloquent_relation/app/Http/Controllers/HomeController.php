<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('home');
    }

     public function post(){


        $posts = Post::all();
        return view('post')->with('posts',$posts);

    }
     public function addpost(){

        $category = Category::all();
        return view('addpost')->with('category',$category);
    }

    
}//end class
