<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col items-start">
                    <div>
                        {{ __('First name') }} : {{ $user->first_name }}
                    </div>
                    <div>
                        {{ __('Last name') }} : {{ $user->last_name }}
                    </div>
                    <div>
                        {{ __('Username') }} : {{ $user->username }}
                    </div>
                    <div>
                        {{ __('Email') }} : {{ $user->email }}
                    </div>
                    <div>
                        {{ __('Time created') }} : {{ $user->created_at }}
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <a href="{{ route('posts.create', ['user' => $user->id]) }}">
                    <x-primary-button class="my-4 float-right">
                        {{ __('Create new :resource', ['resource' => 'post']) }}
                    </x-primary-button>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-gray-900 dark:text-gray-100 text-center">#</th>
                            <th class="text-gray-900 dark:text-gray-100 text-center">{{ __('Content') }}</th>
                            <th class="text-gray-900 dark:text-gray-100 text-center">{{ __('Time created') }}</th>
                            <th class="text-gray-900 dark:text-gray-100 text-center">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->posts as $index => $post)
                            <tr>
                                <th class="text-gray-900 dark:text-gray-100 text-center">{{ $index + 1 }}</th>
                                <td class="text-gray-900 dark:text-gray-100 text-center">{{ $post->content }}</td>
                                <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->created_at }}</td>
                                <td class="text-gray-900 dark:text-gray-100 text-center">
                                    <a href="{{ route('posts.show', ['post' => $post]) }}">
                                        <x-primary-button class="mt-2">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>

                                    <a href="{{ route('posts.edit', ['post' => $post]) }}">
                                        <x-primary-button class="mt-2">
                                            {{ __('Edit') }}
                                        </x-primary-button>
                                    </a>

                                    <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="mt-2">
                                            {{ __('Delete') }}
                                        </x-primary-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
