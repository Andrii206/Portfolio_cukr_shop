<?php

namespace App\Http\Controllers\Admin\Post;
use App\Http\Controllers\Controller;
// use App\Services\Post\Service;
use App\Services\Post\Service;

class BaseController extends Controller{
    public $service;

    public function  __construct(Service $service)
    {
        $this->service=$service;   
    }
}

?>