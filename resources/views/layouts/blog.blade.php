<x-app-layout>
    <div class="container mx-auto">

        <!-- Title -->
        @if (isset($title))
            <h1>
                <div class="flex flex-col items-center gap-2 md:flex-row justify-center">
                    {{ $title }}
                </div>
            </h1>
        @endif

        <div class="flex flex-col-reverse md:flex-row gap-4">

            <!-- Sidebar -->
            <div id="sidebar" class="w-full md:w-1/3 py-4 md:block">
                @include('layouts.sidebar')
            </div>

            <!-- Posts -->
            <div class="w-full md:w-2/3 py-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>
