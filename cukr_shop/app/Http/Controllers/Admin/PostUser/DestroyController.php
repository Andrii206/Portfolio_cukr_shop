<?php

namespace App\Http\Controllers\Admin\PostUser;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PostUser;

class DestroyController extends Controller
{
    public function __invoke(PostUser $postUser)
    {
        $postUser->delete();
        return redirect()->route('admin.admin');
    }
}