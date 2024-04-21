<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validate([
        'title' => 'string',
        'image' => 'file',
        'price' => '',
        'category' => '',
    ]);

        
    
        
        
        $post = $this->service->update($post, $data);
      
        
        
        // return $post instanceof Post ? new PostResource($post) : $post;

        return redirect()->route('admin.post.index');
    }

}