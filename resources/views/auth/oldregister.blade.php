<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div class="form-control">
            <label for="name" class="label">
                <span class="label-text">{{ __('Name') }}</span>
            </label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                class="input input-bordered w-full @error('name') input-error @enderror" />
            @error('name')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="form-control">
            <label for="email" class="label">
                <span class="label-text">{{ __('Email') }}</span>
            </label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                class="input input-bordered w-full @error('email') input-error @enderror" />
            @error('email')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-control">
            <label for="password" class="label">
                <span class="label-text">{{ __('Password') }}</span>
            </label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="input input-bordered w-full @error('password') input-error @enderror" />
            @error('password')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-control">
            <label for="password_confirmation" class="label">
                <span class="label-text">{{ __('Confirm Password') }}</span>
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                class="input input-bordered w-full @error('password_confirmation') input-error @enderror" />
            @error('// filepath: c:\Users\Oofer\Documents\GitHub\ta22eblog\resources\views\auth\oldregister.blade.php
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div class="form-control">
            <label for="name" class="label">
                <span class="label-text">{{ __('Name') }}</span>
            </label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                class="input input-bordered w-full @error('name') input-error @enderror" />
            @error('name')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="form-control">
            <label for="email" class="label">
                <span class="label-text">{{ __('Email') }}</span>
            </label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                class="input input-bordered w-full @error('email') input-error @enderror" />
            @error('email')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-control">
            <label for="password" class="label">
                <span class="label-text">{{ __('Password') }}</span>
            </label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="input input-bordered w-full @error('password') input-error @enderror" />
            @error('password')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-control">
            <label for="password_confirmation" class="label">
                <span class="label-text">{{ __('Confirm Password') }}</span>
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                class="input input-bordered w-full @error('password_confirmation') input-error @enderror" />
            @error('