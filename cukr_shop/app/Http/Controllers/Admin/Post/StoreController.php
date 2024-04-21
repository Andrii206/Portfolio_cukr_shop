<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Post\PostResource;
// use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validate([
            'title' => 'string',
            'image' => 'file',
            'price' => '',
            'category' => '',
        ]);
      
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
       
        $post = $this->service->store($data);
   
    

        // return $post instanceof Post ? new PostResource($post) : $post;

        return redirect()->route('admin.post.index');
    }

} 
// {"data":{"id":101,"title":"\u0446\u0439\u0443\u043a","price":"123","image":"\u0446\u0430\u0443","category_id":{"id":1,"title":"aliquam"}}}
// {"data":{"id":1,"title":"Et deleniti.\u043c\u0443\u0430","price":"18761","image":"https:\/\/via.placeholder.com\/640x480.png\/00ccee?text=voluptatem2","category_id":{"id":6,"title":"asperiores"}}}