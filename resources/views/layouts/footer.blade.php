<footer class="w-full text-gray-100 bg-gray-700 sticky bottom-0 left-0">
    <div class="py-2 md:py-6 lg:py-8">
        <div class="flex items-center flex-col xl:flex-row ">
            <div class="container mx-auto text-xs md:text-sm flex items-center justify-between flex-col md:flex-row gap-2 transition-all duration-500">
                <a href="{{ url(LaravelLocalization::getCurrentLocale().'/about-us') }}"
                    class="uppercase px-4 py-2 @if(request()->is(LaravelLocalization::getCurrentLocale().'/about-us')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-gray-700 hover:bg-gray-100 @endif">
                    {{ __('About Us') }}
                </a>
                <a href="{{ url(LaravelLocalization::getCurrentLocale().'/privacy-policy') }}"
                    class="uppercase px-4 py-2 @if(request()->is(LaravelLocalization::getCurrentLocale().'/privacy-policy')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-gray-700 hover:bg-gray-100 @endif">
                    {{ __('Privacy Policy') }}
                </a>
                <a href="{{ url(LaravelLocalization::getCurrentLocale().'/terms-of-service') }}"
                    class="uppercase px-4 py-2 @if(request()->is(LaravelLocalization::getCurrentLocale().'/terms-of-service')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-gray-700 hover:bg-gray-100 @endif">
                    {{ __('Terms & Conditions') }}
                </a>
                <a href="{{ route('contact.create') }}"
                    class="uppercase px-4 py-2 @if(request()->routeIs('contact.create')) border-b-2 border-indigo-500 @else border-2 border-transparent rounded hover:text-gray-700 hover:bg-gray-100 @endif">
                    {{ __('Contact Us') }}
                </a>
            </div>
        </div>
        <div class="mt-2 mb-2 md:mt-6 md:mb-6 lg:mt-8 lg:mb-8 w-full border-b-2 border-slate-200"></div>
        <div class="flex items-center justify-center">
            <span class="block text-sm text-center">&copy;&nbsp;2024&nbsp;<a class="hover:underline" href="#">JamDesigns</a>.&nbsp;{{ __('All Rights Reserved.') }}</span>
        </div>
    </div>
</footer>
