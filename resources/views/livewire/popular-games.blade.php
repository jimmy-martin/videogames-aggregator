<div wire:init="loadPopularGames" class="popular-games text-sm grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16 justify-items-center">

    @forelse ($popularGames as $game)

        <x-game-card :game="$game" />

    @empty
        @foreach (range(1, 12) as $game)
        <div class="game mt-8">
            <div class="relative inline-block">
                <div class="bg-gray-800 w-44 h-56 text-transparent">Image goes here</div>
            </div>
            <div class="block text-transparent text-lg bg-gray-700 leading-tight rounded mt-4">
                Title goes here
            </div>
            <div class="text-transparent bg-gray-700 rounded mt-3 inline-block">
                Platform goes here
            </div>
        </div>
        @endforeach
    @endforelse

</div>

