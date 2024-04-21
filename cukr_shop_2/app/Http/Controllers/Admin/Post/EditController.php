<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Faker\Provider\Base;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();

        return view('admin.edit', compact('post', 'categories'));
    }

}