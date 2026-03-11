<div class="max-w-3xl mx-auto mt-8 space-y-3">

    @foreach ($keygroups as $keys)
        <div class="flex justify-center gap-2">

            @foreach ($keys as $key)
                @php
                    $colors = [
                        'bg-red-300',
                        'bg-blue-300',
                        'bg-yellow-300',
                        'bg-violet-300',
                        'bg-pink-300'
                    ];

                    $randomColors = $colors[array_rand($colors)];
                @endphp

                <button
                    type="submit"
                    name="guess"
                    value="{{ $key }}"
                    class="
                        min-w-[45px]
                        h-12
                        flex items-center justify-center
                        font-semibold
                        rounded-lg
                        border border-gray-300
                        shadow-sm
                        text-gray-800
                        transition
                        hover:scale-105
                        hover:bg-green-400
                        active:scale-95
                        disabled:opacity-40
                        disabled:cursor-not-allowed
                        {{ $randomColors }}
                    "
                    @disabled(is_array($disabledKeys) ? in_array($key, $disabledKeys) : $disabledKeys)
                >
                    {{ $key }}
                </button>

            @endforeach

        </div>
    @endforeach

</div>