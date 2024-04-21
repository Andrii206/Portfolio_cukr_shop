<?php

namespace App\Http\Controllers\Post;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\ToBasketRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Post\PostResource;
// use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostUser;
class ToBasketController extends Controller
{
    public function __invoke(ToBasketRequest $request, Post $post)
    {      
        
        $data = $request->validate([]);
        
        $data['user_id'] =  auth()->user()->id;
        $data['post_id'] =  $post -> id;
       
        $PostUser = PostUser::create($data);
       
       
        // return $post instanceof Post ? new PostResource($post) : $post;

        return redirect()->route('main');
    }
    

} 