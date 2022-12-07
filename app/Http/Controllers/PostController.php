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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
// use App\Models\Str;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {

        $posts=$post->with(['category', 'author', 'comment',])->filter(request(['search']))->latest()->paginate(6);
        // dd($posts);
        return Inertia::render('blog',[
    'posts'=>$posts
        ]);

    }

    public function Adminindex(Post $post)
    {
        $posts=$post->with(['category','author'])->latest()->get();
       return Inertia::render('admin/posts/index',[
'posts'=>$posts
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $posts=$post->with(['category','author'])->get();
     return Inertia::render('admin/posts/createPost',[
'posts'=>$posts
     ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $excerpt_length= 60;
       $excerpt= Str::limit($request->body, $excerpt_length);
        //validate the post data
        $posts = [
       'user_id' => $request->user_id,
       'category_id'=>$request->category_id,
       'title'=>$request->title,
       'excerpt'=>$excerpt,
       'body'=>$request->body
        ];

        $posts = Post::create($posts);
        return Redirect::route('dashboard')->with('message' ,'post created successfully');
    }

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
        $post->load(['category', 'author', 'comment.CommentAuthor',]);
        $categories =$post->category->get();

        return Inertia::render('admin/posts/update', [
            'post' => $post,
            'categories'=>$categories

        ]);
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
        $post->update($request->all());
        return Redirect::route('dashboard')->with('message', 'post updated seccefully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete($post);
        return Redirect::route('dashboard')->with('message', 'post deleted seccefully.');
    }
}
