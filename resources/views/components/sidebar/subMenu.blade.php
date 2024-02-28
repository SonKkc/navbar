{{-- 
<!-- sub-menu -->
<div x-show="{{ str_replace(' ', '_', $subMenuItem['title']) }}" x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
x-transition:leave="transition ease-in-out duration-200 delay-[290ms] transform"
x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80"
tabindex="-1">
<div x-show="{{ str_replace(' ', '_', $subMenuItem['title']) }}right"
x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
x-transition:leave="transition ease-in-out duration-200 transform"
x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
class="absolute top-0 right-0 z-40 h-screen overflow-y-auto transition-transform w-80 bg-white">
    <div class="flex items-center justify-center text-center bg-[#C1F1A1] w-full h-16 border-b border-gray-200 relative">
        <h5 class="text-base font-semibold uppercase text-gray-500">
            {{ $subMenuItem['title'] }}
        </h5>
        <button type="button" @click="{{ str_replace(' ', '_', $subMenuItem['title']) }}right = !{{ str_replace(' ', '_', $subMenuItem['title']) }}right; {{ str_replace(' ', '_', $subMenuItem['title']) }} = !{{ str_replace(' ', '_', $subMenuItem['title']) }}"
            class="absolute top-1/4 left-0 text-gray-500 bg-transparent rounded-lg text-sm w-8 h-8 flex items-center justify-center">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m15 19-7-7 7-7" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>
    <div class="px-4">
        <ul class="font-medium divide-y divide-solid py-2">
            @foreach($subMenuItem['items'] as $subData)
                <li class="font-medium divide-y divide-solid py-2">
                    <a href="#"
                        class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                        <span class="">{{ $subData['title'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

</div> --}}