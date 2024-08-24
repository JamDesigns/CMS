<nav x-data="{ open: false }" class="sticky top-0 w-full h-16 mx-auto bg-gray-700 z-50">

    <!-- Primary Navigation Menu -->
    <div class="container mx-auto px-6 sx:px-0">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <x-application-mark class="block h-8 w-auto" />
                </div>
                <div class="hidden sm:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a class="px-4 py-2 text-sm text-white @if(request()->is(LaravelLocalization::getCurrentLocale().'/home')) border-b-2 border-indigo-500 @else border-transparent rounded hover:text-white hover:bg-indigo-800 @endif"
                            href="{{ url(LaravelLocalization::getCurrentLocale().'/home') }}">
                            {{ __('Home') }}
                        </a>
                        @if ($totalPosts > 0)
                            <a class="px-4 py-2 text-sm text-white @if(request()->routeIs('posts.*')) border-b-2 border-indigo-500 @else border-transparent rounded hover:text-white hover:bg-indigo-800 @endif"
                                href="{{ route('posts.index') }}">
                                {{ __('Blog') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="hidden sm:block">
                <div class="ml-4 flex items-center md:ml-6">

                    <!-- Search -->
                    <div x-data="{ open: false }" class="h-6 w-6 relative text-white">
                        <div class="text-white cursor-pointer" @click="open = !open">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </span>
                        </div>
                        <div x-show="open" @click.away="open = false"
                            class="flex origin-top-right absolute right-0 mt-4 rounded-md shadow-lg text-gray-700 bg-white ring-1 ring-black ring-opacity-5 px-2 py-2 w-60 z-50">
                            <form class="flex items-center gap-2" action="{{ route('search') }}" method="POST">
                                @csrf

                                <label for="simple-search" class="sr-only">{{ __('Search') }}</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="input" name="search" id="search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-6"
                                        placeholder="{{ __('Search') }}" required>
                                </div>
                                <button type="submit"
                                    class="p-2 text-sm font-medium text-white bg-indigo-500 rounded-lg border border-indigo-500 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Localization flags -->
                    @if (count(config('laravellocalization.supportedLocales')) > 1)
                    <x-dropdown align="right" width="48" contentClasses="py-0 overflow-hidden bg-white">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center content-center px-4 py-2 gap-2 border border-transparent text-sm rounded-md text-white hover:text-white hover:bg-indigo-800">
                                <span class="inline-flex flex-row gap-x-2 h-6 w-auto">
                                    <img class="h-6 w-6" src={{ strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0,
                                        strpos($_SERVER['SERVER_PROTOCOL'], '/' ))) . '://' . $_SERVER['HTTP_HOST']
                                        . "/language-flags/country-" . LaravelLocalization::getCurrentLocale() . ".svg" }} alt="">
                                    {{ Illuminate\Support\Str::upper( LaravelLocalization::getCurrentLocale()) }}
                                </span>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="{{ $localeCode === LaravelLocalization::getCurrentLocale() ? "
                                hidden " : ""}} inline-flex flex-row gap-x-2 h-10 w-full px-4 py-2 text-start text-sm border-transparent hover:text-white hover:bg-indigo-800"
                                hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img class="h-6 w-6" src={{ strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0,
                                    strpos($_SERVER['SERVER_PROTOCOL'], '/' ))) . '://' . $_SERVER['HTTP_HOST']
                                    . "/language-flags/country-$localeCode.svg" }} alt="" />
                                <span class="col-span-2">{{ $properties['native'] }}</span>
                            </a>
                            @endforeach
                        </x-slot>
                    </x-dropdown>
                    @endif

                    <!-- Author menu -->
                    @auth
                    <x-dropdown align="right" width="48" contentClasses="pt-1 pb-0 overflow-hidden bg-white">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm h-10 w-10 rounded-full border-2 border-transparent @if(request()->routeIs('profile.show') || request()->routeIs('api-tokens.index')) border-indigo-800 @else hover:border-indigo-800 @endif">
                                <img class="h-9 w-9 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm text-gray-800 @if(request()->routeIs('profile.show') || request()->routeIs('api-tokens.index')) border-b-indigo-800 @else rounded-md hover:text-white hover:bg-indigo-800 @endif">
                                    {{ Auth::user()->name }}
                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            @unlessrole('User')
                            <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-800 hover:text-white hover:bg-indigo-800 "
                                href="{{ route('dashboard') }}">
                                {{ __('Dashboard') }}
                            </a>
                            @endunlessrole

                            <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-800 @if(request()->routeIs('profile.show')) border-2 border-indigo-500 bg-indigo-500 @else border-transparent hover:text-white hover:bg-indigo-800 @endif"
                                href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </a>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-800 @if(request()->routeIs('api-tokens.index')) border-2 border-indigo-500 bg-indigo-500 @else border-transparent hover:text-white hover:bg-indigo-800 @endif"
                                    href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </a>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-800 hover:text-white hover:bg-indigo-800"
                                    href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </x-slot>
                    </x-dropdown>
                    @else
                        <a class="px-4 py-2 h-10 border border-transparent rounded text-sm text-white hover:text-white hover:bg-indigo-800"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="px-4 py-2 h-10 border border-transparent rounded text-sm text-white hover:text-white hover:bg-indigo-800"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="-mr-2 flex sm:hidden">
                <button type="button" @click="open = !open"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-900 hover:bg-gray-700  hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">{{ __('Open main menu') }}</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg x-description="Icon when menu is closed." x-state:on="Menu open" x-state:off="Menu closed"
                        class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg x-description="Icon when menu is open." x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 hidden"
                        :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="sm:hidden bg-gray-700" id="mobile-menu">
        <div :class="{'block': open, 'hidden': ! open}" class="sm:hidden bg-gray-700" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                @auth
                    @unlessrole('User')
                        <a class="block text-white px-4 py-2 text-base font-medium @if(request()->routeIs('dashboard')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-white hover:bg-indigo-800 @endif"
                            href="{{ route('dashboard') }}">
                            {{ __('Dashboard') }}
                        </a>
                    @endunlessrole
                @endauth
                <a class="block text-white px-4 py-2 text-base font-medium @if(request()->is(LaravelLocalization::getCurrentLocale().'/home')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-white hover:bg-indigo-800 @endif"
                    href="{{ url(LaravelLocalization::getCurrentLocale().'/home') }}">
                    {{ __('Home') }}
                </a>
                @if ($totalPosts > 0)
                <a class="block text-white px-4 py-2 text-base font-medium @if(request()->routeIs('posts.*')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-white hover:bg-indigo-800 @endif"
                    href="{{ route('posts.index') }}">
                    {{ __('Blog') }}
                </a>
                @endif
            </div>

            <!-- Account Management -->
            <div class="border-t border-gray-700 p-4">
                <div class="flex items-center justify-between px-5">
                    <div class="flex items-center">
                        @auth
                            <div class="flex-shrink-0">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm h-10 w-10 rounded-full border-2 border-transparent @if(request()->routeIs('profile.show') || request()->routeIs('api-tokens.index')) border-indigo-500 @else hover:border-indigo-800 @endif">
                                        <img class="h-9 w-9 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm text-gray-800 @if(request()->routeIs('profile.show') || request()->routeIs('api-tokens.index')) border-b-indigo-500 @else rounded-md hover:text-white hover:bg-indigo-800 @endif">
                                            {{ Auth::user()->name }}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium leading-none text-white">{{ Auth::user()->name }}</div>
                                <div class="text-sm font-medium leading-none text-gray-400">{{ Auth::user()->email }}</div>
                            </div>
                        @endauth
                    </div>
                    @if (count(config('laravellocalization.supportedLocales')) > 1)
                        <x-dropdown align="right" width="48" contentClasses="py-0 overflow-hidden bg-white">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center content-center px-4 py-2 gap-2 border border-transparent text-sm rounded-md text-white hover:text-white hover:bg-indigo-800">
                                    <span class="inline-flex flex-row gap-x-2 h-6 w-auto">
                                        <img class="h-6 w-6" src={{ strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0,
                                            strpos($_SERVER['SERVER_PROTOCOL'], '/' ))) . '://' . $_SERVER['HTTP_HOST']
                                            . "/language-flags/country-" . LaravelLocalization::getCurrentLocale() . ".svg" }} alt="">
                                        {{ Illuminate\Support\Str::upper( LaravelLocalization::getCurrentLocale()) }}
                                    </span>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="{{ $localeCode === LaravelLocalization::getCurrentLocale() ? "
                                    hidden " : ""}} inline-flex flex-row gap-x-2 h-10 w-full px-4 py-2 text-start text-sm border-transparent hover:text-white hover:bg-indigo-800"
                                    hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <img class="h-6 w-6" src={{ strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0,
                                        strpos($_SERVER['SERVER_PROTOCOL'], '/' ))) . '://' . $_SERVER['HTTP_HOST']
                                        . "/language-flags/country-$localeCode.svg" }} alt="" />
                                    <span class="col-span-2">{{ $properties['native'] }}</span>
                                </a>
                                @endforeach
                            </x-slot>
                        </x-dropdown>
                    @endif
                </div>
                <div class="mt-3 mb-3 space-y-1">
                    @auth
                        <a class="block text-white ml-4 px-4 py-2 text-base font-medium @if(request()->routeIs('profile.show')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-white hover:bg-indigo-800 @endif"
                            href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </a>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <a class="block text-white ml-4 px-4 py-2 text-base font-medium @if(request()->routeIs('api-tokens.index')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-white hover:bg-indigo-800 @endif"
                            href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </a>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <a class="block text-white ml-4 px-4 py-2 text-base font-medium rounded hover:text-white hover:bg-indigo-800"
                                href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a class="block text-white ml-4 px-4 py-2 text-base font-medium @if(request()->routeIs('login')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-white hover:bg-indigo-800 @endif" href="{{ route('login') }}">{{ __('Login') }}</a>

                        @if (Route::has('register'))
                            <a class="block text-white ml-4 px-4 py-2 text-base font-medium rounded hover:text-white hover:bg-indigo-800" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
