<div class="card bg-base-300 shadow-xl">
    @if($post->displayImage)
        <figure>
            <img src="{{$post->displayImage}}" alt="Shoes" />
        </figure>
    @endif
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        @if(isset($full) && $full)
            <p>{!! nl2br($post->body) !!}</p>
        @else
            <p>{{ $post->snippet }}</p>
        @endif


        <p class="text-base-content">{{$post->user->name}}</p>
        <p class="text-base-content">Comments:{{$post->comments_count}}</p>
        <p class="text-base-content">Likes:{{$post->likes_count}}</p>
        <p class="text-neutral-content">{{$post->created_at->diffForHumans()}}</p>
        <div class="card-actions justify-end">
            @if(!isset($full) || !$full)
                <a class="btn btn-primary" href="{{ route('post', ['post' => $post])}}">Read more</a>
            @endif
        </div>
    </div>
</div>

<!-- Comments list -->
<div class="mt-4">
    <h4 class="text-sm font-semibold mb-2">Comments</h4>

    @forelse ($post->comments->take(5) as $comment)
        <div class="mb-2">
            <div class="text-xs text-gray-400">{{ $comment->user?->name ?? __('Guest') }}</div>
            <div class="text-sm">{{ $comment->body }}</div>
        </div>
    @empty
        <div class="text-sm text-gray-500 mb-2">No comments yet.</div>
    @endforelse
</div>

<!-- Comment form -->
<div class="mt-2">
    @auth
        <form method="POST" action="{{ route('comments.store', $post) }}">
            @csrf
            <div class="flex gap-2">
                <input name="body" required
                       class="input input-bordered flex-1"
                       placeholder="Write a comment..." />
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>
            @error('body')
                <p class="text-xs text-error mt-1">{{ $message }}</p>
            @enderror
        </form>
    @else
        <div class="text-sm">
            <a href="{{ route('login') }}" class="link">Log in</a> to leave a comment.
        </div>
    @endauth
</div>
