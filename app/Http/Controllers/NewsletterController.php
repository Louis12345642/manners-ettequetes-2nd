<?php

namespace App\Http\Controllers;

use App\services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
public function store(Newsletter $newsletter){
    request()->validate([
        'email' => ['required'],
    ]);
    $newsletter->subcribe(Request('email'));
}
}
