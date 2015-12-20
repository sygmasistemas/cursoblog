<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index() {
        $posts = [
            0 => 'post 1',
            1 => 'post 2',
            2 => 'post 3',
            3 => 'post 4',
        ];

        return view('index', compact('posts'));
    }
}
