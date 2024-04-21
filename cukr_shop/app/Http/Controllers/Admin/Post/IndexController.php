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
    public function __invoke(FilterRequest $request)
    {   
        
        // $posts = Post::all();
        
        $data = $request->validated();

        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 10;
        $user = auth()->user();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate($perPage, ['*'], 'page', $page);
        return view('admin.post.index', compact('posts', 'user'));
    }

}