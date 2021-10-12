<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->LikedPosts;
        return view('personal.liked.index', compact('posts'));
    }
}
