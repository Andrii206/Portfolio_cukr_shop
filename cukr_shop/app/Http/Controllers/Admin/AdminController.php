<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\PostsUser;
use Illuminate\Http\Request;
use App\Models\PostUser;
use App\Models\User;

class AdminController extends Controller
{   public function __invoke(){
        $posts = Post::all();
        $user = auth()->user();
        $users = User::all();
        $postsUser = PostUser::all();
        $usersWithPosts = User::with('posts')->paginate(3);
      
       

       
        
      
        return view('admin.main', compact('posts', 'user', 'usersWithPosts', 'postsUser'));
    }
}
