<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validate([]);
        
        $post = $this->service->store($data);

        return $post instanceof Post ? new PostResource($post) : $post;

        // return redirect()->route('post.index');
    }

} 