<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // <-- add this line
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // If user is not authenticated, redirect to login with a message
        if (! $request->user()) {
            return redirect()->route('login')->with('error', 'You must be logged in to create a post.');
        }

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
            // ...other rules...
        ]);

        // ensure the post is associated with the authenticated user
        $data['user_id'] = $request->user()->id;

        Post::create($data);

        return redirect()->route('home')->with('status', 'Post created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        $post->update($request->validated());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}