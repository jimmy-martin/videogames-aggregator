@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16 justify-items-center">

            @foreach ($popularGames as $game)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>

                    @if (isset($game['rating']))
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ round($game['rating']) . '%' }}
                        </div>
                    </div>
                    @endif

                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    {{ $game['name'] }}
                </a>
                <div class="text-gray-400 mt-1">
                    @foreach ($game['platforms'] as $platform)
                        @if (array_key_exists('abbreviation', $platform))
                            @if (!$loop->last)
                                {{ $platform['abbreviation'] . ', ' }}
                            @else
                                {{ $platform['abbreviation']}}
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
{{--        end popular-games--}}
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">

                    @foreach ($recentlyReviwed as $game)
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-200">
                            </a>
                            @if (isset($game['rating']))
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                {{ $game['name'] }}
                            </a>
                            <div class="text-gray-400 mt-1">
                                @foreach ($game['platforms'] as $platform)
                                    @if (array_key_exists('name', $platform))
                                        @if (!$loop->last)
                                            {{ $platform['name'] . ', ' }}
                                        @else
                                            {{ $platform['name'] }}
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                {{ $game['summary'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{--        end recently-reviewed--}}
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">

                    @foreach ($mostAnticipated as $game)
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
                            <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</div>
                        </div>
                    </div>
                    @endforeach

                </div>
{{--                end most anticpated--}}
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-10">Coming Soon</h2>
                <div class="coming-soon-container space-y-10 mt-8">

                    @foreach ($comingSoon as $game)
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
                            <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</div>
                        </div>
                    </div>
                    @endforeach

                </div>
                {{--                end coming soon--}}
        </div>
    </div>
{{--    end container--}}
@endsection
