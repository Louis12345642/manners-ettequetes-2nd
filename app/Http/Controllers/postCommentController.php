<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postCommentController extends Controller
{
    public function store(Post $post)
    {

dd(request());

    }
}
