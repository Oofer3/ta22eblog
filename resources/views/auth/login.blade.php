@extends('partials.layout')
@section('title', 'Login')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Login') }}</h2>
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-control">
                        <label for="email" class="label">
                            <span class="label-text">{{ __('Email') }}</span>
                        </label>
                        <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                            class="input input-bordered @error('email') input-error @enderror w-full" required autofocus autocomplete="username" />
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-control">
                        <label for="password" class="label">
                            <span class="label-text">{{ __('Password') }}</span>
                        </label>
                        <input id="password" name="password" type="password" placeholder="Password"
                            class="input input-bordered @error('password') input-error @enderror w-full" required autocomplete="current-password" />
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-control">
                        <label class="label cursor-pointer gap-2">
                            <input type="checkbox" name="remember" class="checkbox" />
                            <span class="label-text">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-between items-center">
                        <a href="{{ route('password.request') }}" class="link link-primary">{{ __('Forgot your password?') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection