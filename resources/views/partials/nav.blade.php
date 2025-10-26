<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl" href="{{ route('home') }}">daisyUI</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a>Item 1</a></li>
            <li>
                <details class="z-10">
                    <summary>Admin</summary>
                    <ul class="p-2">
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    </ul>
                </details>
            </li>
            <li><a>Item 3</a></li>
        </ul>
    </div>
    <div class="navbar-end gap-2">
        @auth
            <!-- Show when user is logged in -->
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <!-- You can replace this with user's actual avatar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li>
                        <a href="{{ route('profile.update') }}" class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-nav').submit();">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        @else
            <!-- Show when user is not logged in -->
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        @endauth
    </div>
</div>
<!-- add hidden logout form (outside dropdown / outside any other form) -->
<form id="logout-form-nav" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>