<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="p-4 text-xl font-semibold text-pink-600">Admin Panel</div>
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.users.index') }}">Manage Users</a></li>
                <li><a href="{{ route('admin.products.index') }}">Manage Products</a></li>
                <li><a href="{{ route('admin.contacts') }}">Contact Submissions</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navigation -->
            <div class="navbar flex justify-content-end align-items-end text-red-500">
                <div>
                    @if(Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    @endif
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
    @yield('scripts')
</body>

</html>