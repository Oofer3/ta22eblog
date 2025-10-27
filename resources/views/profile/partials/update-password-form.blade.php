<section>
    <header>
        <h2 class="text-lg font-medium text-white-900 dark:text-white-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-white-600 dark:text-white-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="form-control">
            <label for="update_password_current_password" class="label">
                <span class="label-text">{{ __('Current Password') }}</span>
            </label>
            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password"
                class="input input-bordered w-full @error('current_password') input-error @enderror" />
            @error('current_password')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- New Password -->
        <div class="form-control">
            <label for="update_password_password" class="label">
                <span class="label-text">{{ __('New Password') }}</span>
            </label>
            <input id="update_password_password" name="password" type="password" autocomplete="new-password"
                class="input input-bordered w-full @error('password') input-error @enderror" />
            @error('password')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-control">
            <label for="update_password_password_confirmation" class="label">
                <span class="label-text">{{ __('Confirm Password') }}</span>
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                class="input input-bordered w-full @error('password_confirmation') input-error @enderror" />
            @error('password_confirmation')
                <span class="label-text-alt text-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>