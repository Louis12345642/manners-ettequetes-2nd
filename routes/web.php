<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\postCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\usersController;
use App\Models\Post;
use App\Models\User;
use App\services\Newsletter;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    $posts = Post::with(['category', 'author', 'comment'])->latest()->get();

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'posts' => $posts,
    ]);
})->name('home.posts');


require __DIR__ . '/auth.php';

// store newsletter
route::get('/newsletter', [NewsletterController::class, 'store']);
route::get('/blog', [PostController::class, 'index'])->name('blog.posts');

route::get('/about', [AboutusController::class, 'index']);
route::get('/contact', [ContactUsController::class, 'create']);

route::post('/contact-us', [ContactUsController::class, 'store']);
route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post.show');
// get all the post by one category
route::get('categories/{category:slug}', [CategoryController::class, 'show'])->name('posts.under.one.category');


// comment route
route::post('/posts/{post:slug}/comment', [PostController::class, 'storeComment'])->middleware(['auth', 'verified']);


// get the posts by the user

route::get('/author/{author:username}', function (User $author) {

    $posts = $author->posts;
    $posts->load(['category', 'author']);

    return Inertia::render('author', [
        'posts' => $posts,
        'author' => $author

    ]);
})->name('authors.post');
// Admins routes
Route::prefix('admin')->group(function () {
    // Admin Category routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/categories', 'index')->name('categories');
        Route::get('/categories/create', 'create')->name('categories.create');
        Route::post('/categories', 'store')->name('categories.store');
        Route::get('/categories/{category:slug}', 'edit')->name('category.edit');
        Route::put('/categories/{category:slug}', 'update')->name('category.update');
        Route::delete('/categories/{category:slug}', 'destroy')->name('category.delete');
    });
});

Route::prefix('admin')->group(function () {
    // Admin users routes
    Route::controller(usersController::class)->group(function () {
        Route::get('/users', 'index')->name('users');
        Route::get('/users/{user:username}', 'edit')->name('user.edit');
        Route::put('/users/update{user:username}', 'update')->name('user.update');
        Route::delete('/users/delete/{user:username}', 'destroy')->name('user.delete');
    });
});

// Admin posts routes

Route::prefix('admin')->group(function () {

    Route::controller(PostController::class)->group(function () {
        Route::get('/posts', 'Adminindex')->name('dashboard');
        route::get('post/create', 'create')->name('create');
        Route::post('/post/add', 'store')->name('posts.add');
        Route::get('/post/edit/{post:slug}', 'edit')->name('post.edit');
        Route::put('/post/{post:slug}', 'update')->name('post.update');
        Route::delete('/post/{post:slug}', 'destroy')->name('post.delete');
    });
});



// Admin contact messages  routes
Route::prefix('admin')->group(function () {
    Route::controller(ContactUsController::class)->group(function () {
        route::get('/messages', [ContactUsController::class, 'index'])->name('messages');
    });
});
