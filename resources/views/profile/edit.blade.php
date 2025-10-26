@extends('partials.layout')

@section('title', 'Profile')

@section('content')
<div class="max-w-3xl mx-auto py-8 px-4">
    <div class="card bg-base-100 shadow">
        <div class="card-body">
            <h3 class="text-2xl font-semibold mb-4">Profile</h3>

            @if(session('status'))
                <div class="alert alert-success mb-4">{{ session('status') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-error mb-4">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Profile form (inputs) -->
            <form id="profile-update-form" method="POST" action="{{ route('profile.update') }}" class="space-y-4">
                @csrf
                @method('PATCH')

                <div class="form-control">
                    <label class="label"><span class="label-text">Name</span></label>
                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Email</span></label>
                    <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required class="input input-bordered w-full" />
                </div>
            </form>

            <!-- Buttons row: Save (submits profile form) + Logout (separate POST form). kept side-by-side -->
            <div class="mt-4 flex items-center gap-6">
                <!-- Save button targets the profile form by id (avoids nested forms) -->
                <button type="submit" form="profile-update-form" class="btn btn-primary">
                    {{ __('Save') }}
                </button>

                <!-- Logout remains a real POST form (sibling) but visually inline -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-ghost normal-case p-0">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection