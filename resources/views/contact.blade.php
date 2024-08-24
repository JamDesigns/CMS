<x-app-layout>
    <div class="w-full bg-gray-100">
        <div class="container mx-auto">
            <div class="text-center text-3xl font-bold py-4 mb-4">
                {{ __('Contact Us') }}
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6 mb-4">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ __('Contact information') }}
                        </h3>
                        <p class="mt-1 text-sm text-gray-700">
                            {{ __('Let us know how we can help you.') }}
                        </p>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div
                            class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Name -->
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="name" value="{{ __('Name') }}" />
                                    <x-input name="name" type="text" class="mt-1 block w-full" value="{{ old('name') }}" autofocus  />
                                    <x-input-error for="name" class="mt-2" />
                                </div>

                                <!-- Last Name -->
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="last_name" value="{{ __('Last name') }}" />
                                    <x-input name="last_name" type="text" class="mt-1 block w-full" value="{{ old('last_name') }}"  />
                                    <x-input-error for="last_name" class="mt-2" />
                                </div>

                                <!-- Email -->
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="email" value="{{ __('Email') }}" />
                                    <x-input name="email" type="email" class="mt-1 block w-full" value="{{ old('email') }}"  />
                                    <x-input-error for="email" class="mt-2" />
                                </div>

                                <!-- Message -->
                                <div class="col-span-6 sm:col-span-4">
                                    <x-label for="message" value="{{ __('Message') }}"/>
                                    <textarea class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1"
                                        name="message" rows="5" >{{ old('message') }}</textarea>
                                    <x-input-error for="message" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <x-button class="text-gray-100 bg-gray-700 hover:bg-indigo-800">
                                {{ __('Send your message') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
