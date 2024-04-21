<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{   public function __invoke(){
        $posts = Post::all(); 
        return view('admin', compact('posts'));
    }
}
