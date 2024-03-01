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
