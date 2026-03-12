<x-app>
    <x-slot:title>
<<<<<<< HEAD
        {{ ucwords(str_replace('_', ' ', $challenge->category)) }}
    </x-slot:title>

=======
        {{ $stage->challenge->category }}
    </x-slot:title>
    
    <h1>{{ $game->name }}</h1>
    @if($stage->isCompleted())
        <div>Congratulations!</div>
    @elseif ($stage->isFailed())
        <div>You failed! The word we are looking for is {{ $stage->challenge->word }}</div>
    @endif

    <div>
        Score: {{ $stage->player->score }}
    </div>

    <div>
        Category: {{ $stage->challenge->category }}
    </div>
    <div>
        Remaining Lives: {{ $stage->lives }}
    </div>
    <div>
        {{ $stage }}
    </div>
    <br />
    <div>
        <form method="post" action="{{ route('games.update', compact('game')) }}">
            @method('put')
            @csrf
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7

    <div class="max-w-4xl mx-auto px-4 py-10 space-y-8">

<<<<<<< HEAD
        <a href="{{ route('games.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
            ← Back
        </a>

        <!-- Game Title -->
        <div class="flex items-center justify-between">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 uppercase tracking-wide">
                {{ $name }}
            </h1>


            <span class="text-sm bg-gray-100 px-3 py-1 rounded-lg text-gray-600">
                {{ ucwords(str_replace('_', ' ', $challenge->category)) }}
            </span>
        </div>


        <!-- Status Message -->
        <div class="flex justify-center">
            @if ($challenge->isCompleted())
                <div class="bg-green-100 text-green-700 px-6 py-3 rounded-xl font-semibold shadow-sm">
                    🎉 Congratulations! You solved it!
                </div>
            @elseif ($challenge->isFailed())
                <div class="bg-red-100 text-red-700 px-6 py-3 rounded-xl font-semibold shadow-sm">
                    ❌ You failed! The word was
                    <span class="font-bold">{{ $challenge->word }}</span>
                </div>
=======
            @if(!$stage->isOver())
            <div>
                <button type="submit" name="skip" value=true>
                    Skip stage
                </button>
            </div>
            @else
                <a href="{{ route('games.show', ['game'=>$game, 'next'=>true]) }}">Next stage</a>
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
            @endif
        </div>


        <!-- Lives -->
        <div class="flex justify-center items-center gap-2 text-xl">
            <span class="text-gray-600 font-medium">Lives:</span>

            <div class="flex gap-1 text-2xl">
                @for ($i = 0; $i < $challenge->lives; $i++)
                    ❤️
                @endfor
            </div>
        </div>


        <!-- Word Display -->
        <div class="flex justify-center">
            <div
                class="bg-white border border-gray-200 shadow-sm rounded-xl px-10 py-6 text-4xl tracking-widest font-bold text-gray-800">
                {{ $challenge }}
            </div>
        </div>


        <!-- Game Form -->
        <div class="flex justify-center">
            <form method="POST" action="{{ route('games.update', compact('id')) }}" class="space-y-6">
                @method('PUT')
                @csrf

                @error('guess')
                    <div class="text-red-500 text-center">
                        {{ $message }}
                    </div>
                @enderror

                <!-- Keyboard -->
                <div class="flex justify-center">
                    <x-keyboard :disabled-keys="$disabledKeys" />
                </div>


                <!-- Action Buttons -->
                <div class="flex justify-center gap-4 mt-6">

                    @if (!$challenge->isOver())
                        <button type="submit" name="skip" value="true"
                            class="px-6 py-2 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold rounded-lg shadow transition">
                            Skip Challenge
                        </button>
                    @else
                        <a href="{{ route('games.show', compact('id')) }}"
                            class="px-6 py-2 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg shadow transition">
                            Next Challenge →
                        </a>
                    @endif

                </div>

            </form>
        </div>

    </div>
<<<<<<< HEAD
</x-app>
=======
    @php $topGamers = $game->getTopGamers() @endphp
    
    @if($topGamers->isNotEmpty())
    <br/>
    <hr/>
    <div>
        <h2>Top Players</h2>
        <ol>
            @foreach ($topGamers as $gamer)
            <li>
                {{ $gamer->name }} - {{ $gamer->player->score }} point(s)
            </li>
            @endforeach
        </ol>
    </div>
    @endif
</x-app>
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
