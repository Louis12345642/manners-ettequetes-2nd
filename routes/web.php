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
    $featuredPosts = Post::with(['category', 'author'])->latest()->take(8)->get();
    $posts = Post::with(['category', 'author', 'comment'])->filter(request(['search']))->take(3)->get();
    $paginatedPosts=response()->json([$posts]);

    // dd($posts);
    // dd($paginatedPosts);

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'posts' => $posts,
        'featuredPosts' => $featuredPosts,
    ]);
});


require __DIR__ . '/auth.php';

// store newsletter
route::get('/newsletter', [NewsletterController::class, 'store']);
route::get('/blog', [PostController::class,'index']);

route::get('/about', [AboutusController::class, 'index']);
route::get('/contact', [ContactUsController::class, 'create']);

route::post('/contact-us', [ContactUsController::class, 'store']);
route::get('/posts/{post:slug}', [PostController::class, 'show']);
// get all the post by one category
route::get('categories/{category:slug}', [CategoryController::class, 'show']);




// comment route
route::post('/posts/{post:slug}/comment', [PostController::class, 'storeComment'])->middleware(['auth', 'verified']);


// get the posts by the user

route::get('/author/{author:name}', function (User $author) {

    $posts = $author->posts;
    $posts->load(['category', 'author']);

    return Inertia::render('author', [
        'posts' => $posts,
        'author' => $author

    ]);
});
// Admins routes
Route::prefix('admin')->group(function () {
// Admin Category routes
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index')->name('categories');
    Route::get('/categories/create', 'create')->name('categories.create');
    Route::post('/categories', 'store')->name('categories.store');
    Route::get('/categories/{category}', 'edit')->name('categories.edit');
    // Route::put('/categories/{category}', 'update')->name('categories.update');
    // Route::delete('/categories/{category}', 'destroy')->name('categories.destory');
});
});

Route::prefix('admin')->group(function () {
    // Admin users routes
    Route::controller(usersController::class)->group(function () {
        Route::get('/users', 'index')->name('users');

        // Route::get('/categories/create', 'create')->name('categories.create');
        // Route::post('/categories', 'store')->name('categories.store');
        // Route::get('/categories/{category}', 'edit')->name('categories.edit');
        // Route::put('/categories/{category}', 'update')->name('categories.update');
        // Route::delete('/categories/{category}', 'destroy')->name('categories.destory');
    });
    });



    Route::prefix('admin')->group(function () {
        // Admin posts routes
        Route::controller(DasboardController::class)->group(function () {
            Route::get('/posts', 'index')->name('dashboard');
            route::get('/create',[PostController::class,'create'])->name('create');
            // Route::get('/categories/create', 'create')->name('categories.create');
            // Route::post('/categories', 'store')->name('categories.store');
            // Route::get('/categories/{category}', 'edit')->name('categories.edit');
            // Route::put('/categories/{category}', 'update')->name('categories.update');
            // Route::delete('/categories/{category}', 'destroy')->name('categories.destory');
        });
        });



//         route::get('/dashboard', [DasboardController::class, 'index'])
// ->middleware(
//     ['auth', 'verified']
//     )->name('dashboard');

Route::prefix('admin')->group(function () {
    // Admin posts routes
    Route::controller(ContactUsController::class)->group(function () {
        route::get('/messages',[ContactUsController::class,'index'])->name('messages');
        // route::get('/create',[PostController::class,'create'])->name('create');
        // Route::get('/categories/create', 'create')->name('categories.create');
        // Route::post('/categories', 'store')->name('categories.store');
        // Route::get('/categories/{category}', 'edit')->name('categories.edit');
        // Route::put('/categories/{category}', 'update')->name('categories.update');
        // Route::delete('/categories/{category}', 'destroy')->name('categories.destory');
    });
    });



