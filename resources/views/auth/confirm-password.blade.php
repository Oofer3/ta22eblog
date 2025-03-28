<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
        @csrf

        <!-- Password -->
        <div class="form-control">
            <label for="password" class="label">
                <span class="label-text">{{ __('Password') }}</span>
            </label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="input input-bordered w-full" />
            @error('password')
                <span class="text-error text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-control mt-4">
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</x-guest-layout>