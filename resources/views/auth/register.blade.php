@extends('partials.layout')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Create account</h2>

            @if($errors->any())
                <div class="alert alert-error">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div class="form-control">
                    <label class="label"><span class="label-text">Name</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" required class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Email</span></label>
                    <input type="email" name="email" value="{{ old('email') }}" required class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Password</span></label>
                    <input type="password" name="password" required class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Confirm Password</span></label>
                    <input type="password" name="password_confirmation" required class="input input-bordered w-full" />
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

            <p class="text-center text-sm mt-4">
                Already registered?
                <a href="{{ route('login') }}" class="link font-medium">Log in</a>
            </p>
        </div>
    </div>
</div>
@endsection