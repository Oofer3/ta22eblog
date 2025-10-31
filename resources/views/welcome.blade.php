@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <div class="container mx-auto">
        <div class="my-2 text-center">
        {{ $posts->links() }}
        </div>
        <div class="flex flex-col gap-6">
            @foreach ($posts as $post)
                <div class="w-full">
                    @include('partials.post-card')
                </div>
            @endforeach
        </div>
    </div>

@endsection
