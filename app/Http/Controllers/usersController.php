<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class usersController extends Controller
{
public function index(){
    $users = User::latest()->get();
    return inertia('admin/users/index',compact('users'));
}

public function edit(User $user){
    return inertia('admin/users/Edit',compact('user'));

}
public function update(User $user ,Request $request){


  $validated = $request->validate([
        'name' => 'required',
        'email' => 'required',

    ]);

    $user->update($validated);
    return Redirect::route('users')->with('message', 'user  updated sucessfully.');;
}

public function destroy(User $user){


        $user->delete($user);
        return Redirect::route('users')->with('message', 'user deleted seccefully.');


}
public function storeAvater(User $user ,Request $request){

$avater =  $request->file('avater');

$avater_name = $avater->getClientOriginalName();
$avater->move(public_path('/'),$avater_name);
$avater_path = "/" . $avater_name;
$user->update(
    [

        'avater' =>$avater_path,
    ]
);
}
}
