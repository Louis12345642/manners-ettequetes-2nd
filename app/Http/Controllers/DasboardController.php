<?php

namespace App\Http\Controllers;

use App\Models\Dasboard;
use App\Http\Requests\StoreDasboardRequest;
use App\Http\Requests\UpdateDasboardRequest;
use App\Models\Post;
use Inertia\Inertia;

class DasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $posts=$post->with('Category')->get();
       return Inertia::render('admin/dasbord',[
'posts'=>$posts
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDasboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDasboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dasboard $dasboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dasboard $dasboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDasboardRequest  $request
     * @param  \App\Models\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDasboardRequest $request, Dasboard $dasboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dasboard  $dasboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dasboard $dasboard)
    {
        //
    }
}
