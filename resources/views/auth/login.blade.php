@extends('partials.layout')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Log in</h2>

            @if($errors->any())
                <div class="alert alert-error">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password" required class="input input-bordered w-full" />
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="link text-sm" href="{{ route('password.request') }}">Forgot your password?</a>
                    @endif
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
            </form>

            <p class="text-center text-sm mt-4">
                Don't have an account?
                <a href="{{ route('register') }}" class="link font-medium">Register</a>
            </p>
        </div>
    </div>
</div>
@endsection