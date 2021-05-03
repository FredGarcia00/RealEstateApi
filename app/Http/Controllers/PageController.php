<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    //Displaying pages
    public function index() 
    {
        $posts = Post::all();

        return view('pages.index')->with('posts', $posts);
    }

}
