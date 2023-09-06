<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update :resource', ['resource' => 'post']) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg max-w-md mx-auto">
                <div class="p-6 text-gray-900 dark:text-gray-100 py-5 px-6">
                    <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mt-4">
                            <x-input-label for="content" :value="__('Content')" />
                            <x-text-input id="content" class="block mt-1 w-full" type="text" name="content" :value="$post->content" required autocomplete="content" />
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
