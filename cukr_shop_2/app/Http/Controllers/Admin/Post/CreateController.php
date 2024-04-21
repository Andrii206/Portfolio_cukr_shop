<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Faker\Provider\Base;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();

        return view('admin.post.create', compact('categories'));
    }

}