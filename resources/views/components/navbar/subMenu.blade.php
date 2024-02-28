@if(isset($menuItem['items']))
<div x-show="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown"
    x-on:mouseenter="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown = true"
    x-on:mouseleave="{{ str_replace(' ', '_', $menuItem['title']) }}dropDown = false"
    x-transition:enter="transition ease-out duration-300 delay-200" x-transition:enter-start="transform opacity-0"
    x-transition:enter-end="transform opacity-100" x-transition:leave="transition ease-in duration-300 delay-200 "
    x-transition:leave-start="transform opacity-100" x-transition:leave-end="transform opacity-0"
    class="absolute inset-0 top-[150px] h-[500px] w-full bg-white pb-10 pt-6 shadow-lg overflow-scroll">
    <div class="mx-auto max-w-7xl">
        <div class="flex justify-between gap-4">
            <div class="flex flex-wrap gap-4 w-7/12">
                @foreach($menuItem['items'] as $subMenuItem)
                <div class="flex flex-col pe-2">
                    <span class="text-xl text-[#1e5751] mb-4">{{$subMenuItem['title']}}</span>
                    @if(isset($subMenuItem['items']))
                    <div class="flex flex-col h-[300px] overflow-scroll">
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