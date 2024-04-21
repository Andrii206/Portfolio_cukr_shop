<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use DeepCopy\Filter\Filter;


class IndexController extends Controller
{
    public function __invoke()
    {   
        
        // $posts = Post::all();
        $post = Post::where('is_published', 1)->where('category_id', 5)->get();
        $posts = Post::paginate(10);
        return view('admin.post.index', compact('posts'));
    }

}