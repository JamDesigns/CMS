<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2 z-50">
    <div class="max-w-xl px-6">
        <div class="p-2 rounded-lg bg-gray-800">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-full flex-1 items-center md:inline">
                    <p class="ml-3 text-white cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 ml-2 mr-2 pb-4 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer items-center justify-content-end px-4 py-2 rounded-md text-sm font-medium text-black bg-yellow-400 hover:bg-yellow-600">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                    <a href="{{ route('policy.show') }}" class="ml-3 cursor-pointer items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-black bg-yellow-400 hover:bg-yellow-600">
                        {{ trans('cookie-consent::texts.privacy-policy') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
