<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="wrapper">
                <a href="{{ route('users.create') }}">
                    <x-primary-button class="my-4 float-right">
                        {{ __('Create new :resource', ['resource' => 'user']) }}
                    </x-primary-button>
                </a>
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
                                    <div class="flex flex-row justify-center">
                                        <a href="{{ route('users.show', ['user' => $user]) }}">
                                            <x-primary-button class="mt-2 mx-2">
                                                {{ __('View') }}
                                            </x-primary-button>
                                        </a>
                                        
                                        <a href="{{ route('users.edit', ['user' => $user]) }}">
                                            <x-primary-button class="mt-2 mx-2">
                                                {{ __('Edit') }}
                                            </x-primary-button>
                                        </a>
                                        
                                        <form action="{{ route('users.destroy', ['user' => $user]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <x-primary-button class="mt-2 mx-2">
                                                {{ __('Delete') }}
                                            </x-primary-button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
