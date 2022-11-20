<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\postCommentController;
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

route::get('/newsletter',function(){
    $mailchimp = new \MailchimpMarketing\ApiClient();
    $mailchimp->setConfig([
	'apiKey' => config('services.mailchimp.key'),
	'server' => 'us17'
]);

$list_id = "c4fb834966";

request()->validate([
    'email' => ['required'],
]);



    try {
        $response = $mailchimp->lists->addListMember($list_id, [
            "email_address" => request('email'),
            "status" => "subscribed",

        ]);

        return redirect('/')->with('message', 'you have suceesfully subcribed');

    } catch (\Exception $e) {
        $e->getMessage();
         return redirect('/')->with('Errormessage','This email could not be added to subcrition list');

    }


});

// route::get('/', [PostController::class, 'index']);
route::get('/about', [AboutusController::class, 'index']);
route::get('/contact', [ContactUsController::class, 'create']);
route::post('/contact-us', [ContactUsController::class, 'store']);
route::get('/posts/{post:slug}', [PostController::class, 'show']);
// get all the post by one category
route::get('categories/{category:slug}', [CategoryController::class, 'show']);
// the admin section
route::get('/dashboard',[DasboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

// comment route

// comment route
route::post('/posts/{post:slug}/comment',[PostController::class,'storeComment'])->middleware(['auth', 'verified']);


// get the posts by the user

route::get('/author/{author:name}', function (User $author) {

    $posts = $author->posts;
    $posts->load(['category','author']);

    return Inertia::render('author', [
        'posts' => $posts,
        'author'=>$author



    ]);
});
