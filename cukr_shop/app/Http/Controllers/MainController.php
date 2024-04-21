<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\PostUser;
use DeepCopy\Filter\Filter;


class MainController extends Controller
{
    public function __invoke(FilterRequest $request)
    {   
        
    
        $data = $request->validated();

        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 8;

        
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate($perPage, ['*'], 'page', $page);
        $categories = Category::all();
        $user = auth()->user();
        if ($user) {
            $auth = auth()->user()->id;
            $postToUser = PostUser::where('user_id', $auth)->get();
            $postIds = $postToUser->pluck('post_id')->toArray();
            $postsUser = Post::whereIn('id', $postIds)->get();
            return view('main', compact('posts', 'categories', 'postsUser'));
        }
        $postsUser = null;
        return view('main', compact('posts', 'categories', 'postsUser'));
    }

}

