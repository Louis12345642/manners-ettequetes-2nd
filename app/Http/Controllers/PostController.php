<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Author;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredPosts = Post::with(['category', 'author'])->latest()->take(8)->get();
        // $dogs = Dogs::orderBy('id', 'desc')->take(5)->get();
        $posts = Post::filter(request(['search']))->get();
        // dd($posts);


        // return inertia('Posts/home',compact('posts'));
        return Inertia::render('home', [
            'posts' => $posts,
            'featuredPosts' => $featuredPosts,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return Inertia::render('admin/createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Post $post)
    {

        request()->validate([
            'body' => ['required', 'max:225'],
        ]);

        $id = Auth::id();
        $commentData = [
            'user_id' => $id,
            'post_id' => $post->id,
            'body' => request('body')

        ];

        Comment::create($commentData);

        return back();
    }


    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->load(['category', 'author', 'comment.CommentAuthor',]);

        return Inertia::render('single-post', [
            'singlePost' => $post,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
