<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="wrapper">
                <x-primary-button class="my-4 float-right">
                    {{ __('Create new :resource', ['resource' => 'user']) }}
                </x-primary-button>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-gray-900 dark:text-gray-100">#</th>
                            <th class="text-gray-900 dark:text-gray-100">{{ __('Name') }}</th>
                            <th class="text-gray-900 dark:text-gray-100">{{ __('Username') }}</th>
                            <th class="text-gray-900 dark:text-gray-100">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                            <tr>
                                <th class="text-gray-900 dark:text-gray-100 text-center">{{ $index + 1 }}</th>
                                <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->full_name }}</td>
                                <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->username }}</td>
                                <td class="text-gray-900 dark:text-gray-100 text-center">
                                    <x-primary-button class="mt-4 mx-2" onclick="window.location.href='{{ route('users.show', ['user' => $user]) }}'">
                                        {{ __('View') }}
                                    </x-primary-button>
                                    <x-primary-button class="mt-4 mx-2" onclick="window.location.href='{{ route('users.edit', ['user' => $user]) }}'">
                                        {{ __('Edit') }}
                                    </x-primary-button>
                                    <x-primary-button class="mt-4 mx-2" onclick="window.location.href='{{ route('users.destroy', ['user' => $user]) }}'">
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
