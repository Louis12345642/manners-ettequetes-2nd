<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
public function index(){
    $users = User::latest()->get();
    return inertia('admin/users/index',compact('users'));
}
}
