<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
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

// require __DIR__.'/auth.php';

route::get('/', [PostController::class, 'index']);
route::get('/about', [AboutusController::class, 'index']);
route::get('/contact', [ContactUsController::class, 'create']);
route::post('/contact-us', [ContactUsController::class, 'store']);
route::get('/posts/{post:slug}', [PostController::class, 'show']);
// get all the post by one category
route::get('categories/{category:slug}', [CategoryController::class, 'show']);


// the admin section
route::get('/dashboard',[DasboardController::class,'index']);
// get the posts by the user


route::get('/author/{author:username}', function (User $author) {

    $posts = $author->posts;
    $posts->load(['category','author']);

    return Inertia::render('author', [
        'posts' => $posts,
        'author'=>$author



    ]);
});
