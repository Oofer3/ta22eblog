@extends('partials.layout')
@section('title', 'Register')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Register') }}</h2>
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <!-- Name -->
                    <div class="form-control">
                        <label for="name" class="label">
                            <span class="label-text">{{ __('Name') }}</span>
                        </label>
                        <input id="name" name="name" type="text" placeholder="Name" value="{{ old('name') }}"
                            class="input input-bordered @error('name') input-error @enderror w-full" required autofocus autocomplete="name" />
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-control">
                        <label for="email" class="label">
                            <span class="label-text">{{ __('Email') }}</span>
                        </label>
                        <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                            class="input input-bordered @error('email') input-error @enderror w-full" required autocomplete="username" />
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
                            class="input input-bordered @error('password') input-error @enderror w-full" required autocomplete="new-password" />
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-control">
                        <label for="password_confirmation" class="label">
                            <span class="label-text">{{ __('Confirm Password') }}</span>
                        </label>
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password"
                            class="input input-bordered @error('password_confirmation') input-error @enderror w-full" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Actions -->
                    <div class="flex justify-between items-center">
                        <a href="{{ route('login') }}" class="link link-primary">{{ __('Already registered?') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection