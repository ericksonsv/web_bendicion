<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @forelse ($linkCategories as $category)
                            <a href="{{ route('links', $category->id) }}" class="flex items-center gap-2 p-4 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                                <img src="{{ asset('images/folder.png') }}" class="w-16" alt="{{ $category->name }}">
                                <div>
                                    <p class="uppercase text-sm font-bold">{{ $category->name }}</p>
                                    <p class="text-xs">Total Enclaces: {{ $category->links->count() }}</p>
                                </div>
                            </a>
                        @empty
                            <p>No hay recursos disponibles</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
