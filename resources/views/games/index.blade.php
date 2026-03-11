<x-app>
    <x-slot:title>
        My Games
    </x-slot:title>

    <div class="max-w-4xl mx-auto py-10 px-4">

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                My Games
            </h1>

            <a href="{{ route('games.create') }}"
               class="px-5 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                + New Game
            </a>
        </div>

        <!-- Games List -->
        <div class="space-y-4">

            @forelse ($games as $id => $game)
                <div class="flex items-center justify-between p-5 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition">

                    <div class="flex items-center gap-3">
                        <span class="text-gray-400 font-medium">
                            {{ $loop->iteration }}.
                        </span>

                        <a href="{{ route('games.show', compact('id')) }}"
                           class="text-lg font-semibold text-gray-800 hover:text-green-600 transition">
                            {{ $game['name'] }}
                        </a>
                    </div>

                    <span class="text-sm text-gray-400">
                        View →
                    </span>

                </div>
            @empty
                <div class="p-6 text-center bg-white border border-dashed border-gray-300 rounded-xl text-gray-500">
                    No Games Yet 🎮
                </div>
            @endforelse

        </div>

    </div>
</x-app>