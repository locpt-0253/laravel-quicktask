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
                        {{ __('First name: :first_name', ['first_name' => $user->first_name]) }}
                    </div>
                    <div>
                        {{ __('Last name: :last_name', ['last_name' => $user->last_name]) }}
                    </div>
                    <div>
                        {{ __('Username: :username', ['username' => $user->username]) }}
                    </div>
                    <div>
                        {{ __('Created at: :created_at', ['created_at' => $user->created_at]) }}
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <x-primary-button class="my-4 float-right">
                    {{ __('Create new :resource', ['resource' => 'post']) }}
                </x-primary-button>
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
                                    <x-primary-button class="mt-4" onclick="window.location.href='{{ route('users.show', ['user' => $user]) }}'">
                                        {{ __('View') }}
                                    </x-primary-button>
                                    <x-primary-button class="mt-4" onclick="window.location.href='{{ route('users.edit', ['user' => $user]) }}'">
                                        {{ __('Edit') }}
                                    </x-primary-button>
                                    <x-primary-button class="mt-4" onclick="window.location.href='{{ route('users.destroy', ['user' => $user]) }}'">
                                        {{ __('Delete') }}
                                    </x-primary-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
