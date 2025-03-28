<x-guest-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div class="form-control">
            <label for="email" class="label">
                <span class="label-text">{{ __('Email') }}</span>
            </label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
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
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="input input-bordered w-full @error('password') input-error @enderror" />
            @error('password')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-control">
            <label class="label cursor-pointer gap-2">
                <input id="remember_me" type="checkbox" name="remember" class="checkbox" />
                <span class="label-text">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Actions -->
        <div class="flex justify-between items-center">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link link-primary">{{ __('Forgot your password?') }}</a>
            @endif
            <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
        </div>
    </form>
</x-guest-layout>