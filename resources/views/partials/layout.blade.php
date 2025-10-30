<!DOCTYPE html>
<html lang="en" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- flash messages --}}
    @if(session('error'))
        <div class="max-w-3xl mx-auto mt-4">
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        </div>
    @endif

    @if(session('status'))
        <div class="max-w-3xl mx-auto mt-4">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif

@include('partials.nav')

@yield('content')
</body>
</html>
