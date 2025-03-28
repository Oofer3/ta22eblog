<x-guest-layout>
    <div class="container mx-auto">
        <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Reset Password') }}</h2>
                <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="form-control">
                        <label for="email" class="label">
                            <span class="label-text">{{ __('Email') }}</span>
                        </label>
                        <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                            class="input input-bordered @error('email') input-error @enderror w-full" />
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
                            class="input input-bordered @error('password') input-error @enderror w-full" />
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
                            class="input input-bordered @error('password_confirmation') input-error @enderror w-full" />
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Actions -->
                    <div class="form-control mt-4">
                        <button type="submit" class="btn btn-primary w-full">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>