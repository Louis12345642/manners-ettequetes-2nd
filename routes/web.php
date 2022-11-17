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



Route::get('/', function () {
    $featuredPosts = Post::with(['category','author'])->latest()->take(8)->get();
    // $dogs = Dogs::orderBy('id', 'desc')->take(5)->get();
    $posts= Post::with(['category','author','comment'])->filter(request(['search']))->get();
    // dd($posts);

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'posts'=>$posts,
        'featuredPosts'=>$featuredPosts,
    ]);
});



require __DIR__.'/auth.php';

// route::get('/', [PostController::class, 'index']);
route::get('/about', [AboutusController::class, 'index']);
route::get('/contact', [ContactUsController::class, 'create']);
route::post('/contact-us', [ContactUsController::class, 'store']);
route::get('/posts/{post:slug}', [PostController::class, 'show']);
// get all the post by one category
route::get('categories/{category:slug}', [CategoryController::class, 'show']);
// the admin section
route::get('/dashboard',[DasboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');


// get the posts by the user

route::get('/author/{author:name}', function (User $author) {

    $posts = $author->posts;
    $posts->load(['category','author']);

    return Inertia::render('author', [
        'posts' => $posts,
        'author'=>$author



    ]);
});
