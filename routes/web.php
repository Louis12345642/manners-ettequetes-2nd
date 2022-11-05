<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// route::get('/users',function(){
// return Inertia::render('users',[
//     'users'=>[
//       'john'=>[
//         'name'=>'john deo',
//         'age'=>24,
//         'nationality'=>'american'
//       ],
//       'robert'=>[
//         'name'=>'robert',
//         'age'=>20,
//         'nationality'=>'canadian'
//       ],
//       'bosco'=>[
//         'name'=>'bosco',
//         'age'=>30,
//         'nationality'=>'mexican'
//       ]
//     ]

// ]);
// });


// route::get('/john',function(){
//     return Inertia::render('john');
// });
// route::get('bosco',function(){
//     return Inertia::render('bosco');
// });



// route::get('/robert',function(){
//     return Inertia::render('robert');
// });
// require __DIR__.'/auth.php';

route::get('/',[PostController::class,'index']);
route::get('/about',[AboutusController::class,'index']);
route::get('/contact',[ContactUsController::class,'index']);
route::get('/posts/{id}',[PostController::class,'singlePost']);
