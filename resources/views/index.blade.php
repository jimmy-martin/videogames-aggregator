@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy VII Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/animalcrossing.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Animal Crossing: New Horizons
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Doom Eternal
                </a>
                <div class="text-gray-400 mt-1">Playstation 4, PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half Life: Alyx
                </a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Luigi's Mansion 3
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Resident Evil 3
                </a>
                <div class="text-gray-400 mt-1">PC, Playstation 4, XBOX One X</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Resident Evil 3
                </a>
                <div class="text-gray-400 mt-1">PC, Playstation 4, XBOX One X</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Luigi's Mansion 3
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half Life: Alyx
                </a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Doom Eternal
                </a>
                <div class="text-gray-400 mt-1">Playstation 4, PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/animalcrossing.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Animal Crossing: New Horizons
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy VII Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
        </div>
{{--        end popular-games--}}
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-200">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy VII Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deserunt ipsam iure perferendis quae recusandae similique voluptatem. Aliquid eligendi hic nulla obcaecati rem! Animi blanditiis eos illo in inventore iure libero maiores, molestiae mollitia natus neque nesciunt nostrum perspiciatis, porro praesentium quia quo saepe sequi soluta tenetur ut veritatis voluptatibus voluptatum! Accusantium mollitia nemo nihil nisi praesentium quas tenetur totam.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/animalcrossing.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-200">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Animal Crossing: New Horizons
                            </a>
                            <div class="text-gray-400 mt-1">Nintendo Switch</div>
                            <p class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deserunt ipsam iure perferendis quae recusandae similique voluptatem. Aliquid eligendi hic nulla obcaecati rem! Animi blanditiis eos illo in inventore iure libero maiores, molestiae mollitia natus neque nesciunt nostrum perspiciatis, porro praesentium quia quo saepe sequi soluta tenetur ut veritatis voluptatibus voluptatum! Accusantium mollitia nemo nihil nisi praesentium quas tenetur totam.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/doom.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-200">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Doom Eternal
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4, PC</div>
                            <p class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deserunt ipsam iure perferendis quae recusandae similique voluptatem. Aliquid eligendi hic nulla obcaecati rem! Animi blanditiis eos illo in inventore iure libero maiores, molestiae mollitia natus neque nesciunt nostrum perspiciatis, porro praesentium quia quo saepe sequi soluta tenetur ut veritatis voluptatibus voluptatum! Accusantium mollitia nemo nihil nisi praesentium quas tenetur totam.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{--        end recently-reviewed--}}
            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/avengers.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Marvel's Avengers</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 3, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/ghost.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
                            <div class="text-gray-400 text-sm mt-1">July 17, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/tlou2.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Last Of Us Part II</a>
                            <div class="text-gray-400 text-sm mt-1">June 19, 2020</div>
                        </div>
                    </div>
                </div>
{{--                end most anticpated--}}
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-10">Coming Soon</h2>
                <div class="coming-soon-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/avengers.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Marvel's Avengers</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 3, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/ghost.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
                            <div class="text-gray-400 text-sm mt-1">July 17, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/tlou2.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-200">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Last Of Us Part II</a>
                            <div class="text-gray-400 text-sm mt-1">June 19, 2020</div>
                        </div>
                    </div>
                </div>
                {{--                end coming soon--}}
            </div>
        </div>
    </div>
{{--    end container--}}
@endsection
