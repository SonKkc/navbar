<div  x-data="{
    @foreach ($menuData as $data)
        {{ str_replace(' ', '_', $data['title']) }}: false,
        {{ str_replace(' ', '_', $data['title']) }}right: false, 
        {{ str_replace(' ', '_', $data['title']) }}dropDown: false,
        @if(isset($data['items']))
            @foreach ($data['items'] as $subData)
                {{ str_replace(' ', '_', $subData['title']) }}: false,
                {{ str_replace(' ', '_', $subData['title']) }}right: false,
            @endforeach
        @endif
    @endforeach
    mainMenu: false, drawer: false, outsideClick: false}">
    <div class="fixed top-0 inset-0 shadow-lg p-2 h-[150px] border-b border-gray-300">
        <div class="lg:block md:hidden max-sm:hidden max-w-7xl mx-auto">
            <div class="flex items-center justify-between">
                <img src="{{ asset('images/wonderbly-logo.svg') }}" alt="logo" class="h-20 w-20" />
                <div class="w-[700px] p-2 border-2 border-gray-400 rounded mb-2 flex items-center">
                    <input id="search" class="outline-0 border-0 w-full" type="search" placeholder="search our store..."></input>
                    <label for="search" class="">
                        <svg class="w-8 h-8 text-gray-800 pe-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                          </svg>
                    </label>
                </div>
                <div class="flex items-center gap-2 pe-2">
                    <button class="">
                        <svg class="w-10 h-10 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="1" d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                    </button>
                    <button class="">
                        <svg class="w-10 h-10 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-full">
                @if($menuData)
                <div class="mt-7 flex items-center gap-4">
                    @foreach ($menuData as $menuItem)
                        <div 
                        @if (isset($menuItem['items'])) 
                        x-on:mouseenter="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown = true"
                        @endif
                        @if (isset($menuItem['items'])) 
                        x-on:mouseleave="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown = false"
                        @endif
                            class="flex items-center border-b-4 border-white text-gray-700 hover:border-[#1e5751] hover:text-[#1e5751]">
                            @if (isset($menuItem['items']))
                                <div class="flex items-center justify-between">
                                    <span class="text-lg">{{ $menuItem['title'] }}</span>
                                    <button class="pe-1 text-center text-lg">
                                        <svg class="h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.25" d="m19 9-7 7-7-7" />
                                        </svg>
                                    </button>
                                </div>
                            @else
                                <a class="flex items-center">
                                    <span class="text-lg">{{ $menuItem['title'] }}</span>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
   
   
    @foreach($menuData as $menuItem)
        @if(isset($menuItem['items']))
        <div x-show="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown"
            x-on:mouseenter="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown = true"
            x-on:mouseleave="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown = false"
            x-transition:enter="transition ease-out duration-300 delay-200" x-transition:enter-start="transform opacity-0"
            x-transition:enter-end="transform opacity-100" x-transition:leave="transition ease-in duration-300 delay-200 "
            x-transition:leave-start="transform opacity-100" x-transition:leave-end="transform opacity-0"
            class="absolute inset-0 top-[150px] max-h-[500px] w-full bg-white pb-10 pt-6 shadow-lg overflow-hidden">
            <div class="mx-auto max-w-7xl">
                <div class="flex justify-between gap-4">
                    <div class="flex flex-wrap gap-4 w-7/12">
                        @foreach($menuItem['items'] as $subMenuItem)
                        <div class="flex flex-col pe-2">
                            <span class="text-xl text-[#1e5751] mb-4">{{$subMenuItem['title']}}</span>
                            @if(isset($subMenuItem['items']))
                            <div class="flex flex-col max-h-[300px] overflow-hidden">
                                @foreach($subMenuItem['items'] as $subSubMenuItem)
                                <a href="{{$subSubMenuItem['url']}}" class="text-lg text-gray-700 hover:text-[#1e5751] py-3">{{$subSubMenuItem['title']}}</a>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    <div class="w-3/12 flex flex-col">
                        <img src="{{ asset('images/we-love-mom-pic.avif') }}" alt="logo" class="w-full h-[180px] object-contain hover:object-scale-down" />
                        <div class="text-[#1e5751] text-2xl">
                            Sale up to 25% in our sale
                        </div>
                        <span class="text-base text-[#1e5751] flex">
                            See what's new
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown"
            x-transition:enter="transition ease-out duration-300 delay-200" x-transition:enter-start="transform opacity-0"
            x-transition:enter-end="transform" x-transition:leave="transition ease-in duration-300 delay-200 "
            x-transition:leave-start="transform" x-transition:leave-end="transform opacity-0"
            class="fixed left-0 z-[-1] h-full w-full bg-black opacity-50">
        </div>
        @endif
    @endforeach
</div>



