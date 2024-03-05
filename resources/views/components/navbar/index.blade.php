<div class="fixed top-0 inset-0 shadow-lg p-2 h-[150px] border-b border-gray-300 bg-white">
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
                <button class="hover:bg-gray-300 rounded-full">
                    <svg class="w-10 h-10 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="1" d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </button>
                <button class="hover:bg-gray-300 rounded-full">
                    <svg class="w-10 h-10 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full">
            <x-navbar.menu :menuData="$menuData" />
        </div>
    </div>

    <div class="lg:hidden md:block">
        <div class="grid grid-cols-3 gap-3">
            <div class="flex items-center justify-start">
                <x-sidebar :menuData="$menuData" />
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/wonderbly-logo.svg') }}" alt="logo" class="h-20 w-20" />
            </div>
            <div class="flex items-center justify-end gap-2 pe-2">
                <button class="">
                    <svg class="w-7 h-7 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="1" d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </button>
                <button class="">
                    <svg class="w-7 h-7 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full p-2 border border-gray-400 rounded mb-4 flex items-center ">
            <label for="search-mb" class="">
                <svg class="w-8 h-8 text-gray-800 pe-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                  </svg>
            </label>
            <input class="outline-0 border-0 w-full" id="search-mb" type="search" placeholder="search our store..."></input>
        </div>
    </div> 
</div>

    @foreach($menuData as $menuItem)
        <x-navbar.subMenu :menuItem="$menuItem"/>
    @endforeach

