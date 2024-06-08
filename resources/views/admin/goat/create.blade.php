<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goats Dashboard') }}
        </h2>
        <a href="{{ route('admin/goats') }}">add</a>
    </x-slot>

    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-5 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Add New Goat</h2>

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('goats.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="user_id" class="block text-gray-700">User</label>
                    <select name="user_id" id="user_id" class="w-full mt-2 p-2 border border-gray-300 rounded" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama Kambing</label>
                    <input type="text" name="name" id="name" class="w-full mt-2 p-2 border border-gray-300 rounded" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="age" class="block text-gray-700">Umur</label>
                    <input type="number" name="age" id="age" class="w-full mt-2 p-2 border border-gray-300 rounded" required>
                    @error('age')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="weight" class="block text-gray-700">Berat</label>
                    <input type="number" step="0.01" name="weight" id="weight" class="w-full mt-2 p-2 border border-gray-300 rounded" required>
                    @error('weight')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="health_status" class="block text-gray-700">Health Status</label>
                    <input type="text" name="health_status" id="health_status" class="w-full mt-2 p-2 border border-gray-300 rounded" required>
                    @error('health_status')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="for_sale" class="block text-gray-700">For Sale</label>
                    <select name="for_sale" id="for_sale" class="w-full mt-2 p-2 border border-gray-300 rounded" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    @error('for_sale')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Goat</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
