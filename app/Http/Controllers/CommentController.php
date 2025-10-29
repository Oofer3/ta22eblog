<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    /**
     * Store a new comment for a post.
     */
    public function store(StoreCommentRequest $request, Post $post): RedirectResponse
    {
        $data = $request->validated();

        // ensure user_id is set
        $data['user_id'] = $request->user()->id;

        // create comment related to the post
        $post->comments()->create($data);

        return back()->with('status', 'comment-added');
    }
}
