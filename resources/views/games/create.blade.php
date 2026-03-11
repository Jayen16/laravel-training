<x-app>
    <x-slot:title>
        New Game
    </x-slot:title>

    <div class="max-w-xl mx-auto py-12 px-4">

        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-8">
            Create New Game
        </h1>

        <!-- Form Card -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8">

            <form method="POST" action="{{ route('games.store') }}" class="space-y-6">
                @csrf

                <!-- Game Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Game Name
                    </label>

                    <input
                        id="name"
                        name="name"
                        type="text"
                        value="{{ old('name') }}"
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition"
                        placeholder="Enter game name"
                    >

                    @error('name')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex items-center gap-4">

                    <button
                        type="submit"
                        class="px-6 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition"
                    >
                        Create Game
                    </button>

                    <a
                        href="{{ route('games.index') }}"
                        class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</x-app>