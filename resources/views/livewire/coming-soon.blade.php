<div wire:init="loadComingSoon" class="coming-soon-container space-y-10 mt-8">

    @forelse ($comingSoon as $game)
        <x-game-card-small :game="$game" />
    @empty
        @foreach (range(1,4) as $game)
        <div class="game flex">
            <div class="bg-gray-800 w-16 h-20 flex-none text-transparent">
                Image
            </div>
            <div class="ml-4">
                <div class="text-transparent bg-gray-700 rounded leading-tight">Title goes here today</div>
                <div class="inline-block text-transparent bg-gray-700 rounded mt-2">Date goes here</div>
            </div>
        </div>
        @endforeach
    @endforelse

</div>
