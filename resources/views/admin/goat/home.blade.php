<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goats Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('goat!') }}
                    <a href="{{ route('admin/goats/create') }}">add</a>
                    <a href="{{ route('admin.dashboard') }}">back</a>

                    @foreach ( $goat as  $gt )
                        <h1>heh</h1>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
