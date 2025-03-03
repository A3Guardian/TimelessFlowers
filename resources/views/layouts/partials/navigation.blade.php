<div class="relative top-0 left-0 right-0 bg-white shadow-md py-8 px-6 flex items-center justify-between">
    <!-- Mobile Menu Toggle -->
    <input type="checkbox" id="toggler" class="hidden peer">
    <label for="toggler" class="fas fa-bars text-3xl text-gray-800 border-2 border-gray-300 rounded-md p-2 cursor-pointer md:hidden"></label>

    <!-- Logo -->
    <div class="shrink-0">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>

    <!-- Navigation Links -->
    <nav class="hidden md:flex flex-1 justify-center space-x-6 md:space-x-8">
        <a href="/#about" class="text-3xl text-gray-700 hover:text-pink-500">About</a>
        <a href="/#products" class="text-3xl text-gray-700 hover:text-pink-500">Products</a>
        <a href="/#review" class="text-3xl text-gray-700 hover:text-pink-500">Review</a>
        <a href="{{ route('contact.show') }}" class="text-3xl text-gray-700 hover:text-pink-500">Contact</a>
    </nav>

    <!-- User Menu -->
    <div class="flex items-center space-x-4">
        <a href="#" class="fas fa-heart text-3xl text-gray-800 hover:text-pink-500"></a>
        <a href="#" class="fas fa-shopping-cart text-3xl text-gray-800 hover:text-pink-500"></a>

        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center text-gray-800 hover:text-pink-500">
                    <a href="#" class="fas fa-user text-3xl"></a>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                @if(Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                @endif
            </x-slot>
        </x-dropdown>
    </div>
</div>

<!-- Mobile Navigation Menu -->
<div class="hidden peer-checked:block md:hidden absolute top-full left-0 right-0 bg-white shadow-md p-6 space-y-4">
    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-responsive-nav-link>
    <a href="#about" class="text-2xl text-gray-700 hover:text-pink-500">About</a>
    <a href="#products" class="text-2xl text-gray-700 hover:text-pink-500">Products</a>
    <a href="#review" class="text-2xl text-gray-700 hover:text-pink-500">Review</a>
    <a href="#contact" class="text-2xl text-gray-700 hover:text-pink-500">Contact</a>

    <!-- Mobile User Info -->
    <div class="border-t border-gray-200 pt-4">
        <div class="text-lg text-gray-800">
            @if(Auth::check())
            <div>{{ Auth::user()->name }}</div>
            <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
            @else
            <div>Guest</div>
            @endif
        </div>

        <x-responsive-nav-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-responsive-nav-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
</div>