<li class="py-2">
    @if(isset($menuItem['items']))
        <button @click="{{  str_replace(' ', '_', $menuItem['title']) }} = !{{  str_replace(' ', '_', $menuItem['title']) }}; {{  str_replace(' ', '_', $menuItem['title']) }}right = true"
            class="flex w-full justify-between rounded-lg p-2 text-gray-700">
            <span class="ms-3">{{ $menuItem['title'] }}</span>
            <svg class="ml-2 inline-block h-6 w-6 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="m9 5 7 7-7 7" />
            </svg>
        </button>
    @else
    <a href="{{ $menuItem['url'] }}" class="flex w-full justify-between rounded-lg p-2 text-gray-700">
        <span class="ms-3">{{ $menuItem['title'] }}</span>
    </a>
    @endif
</li>
