@php
$sidebarData = [
    [
        "title" => "Home",
        "icon" => "home",
        "items" => [
            [
                "title" => "Sub Home",
                "icon" => "icon home",
                "url" => "/subhome"
            ],
            [
                "title" => "Sub Home 2",
                "icon" => "icon sub home 2",
                "items" => [
                    [
                        "title" => "Sub Home 3",
                        "icon" => "icon sub home 3",
                        "url" => "/subhome3",
                        "image" => "image url"
                    ],
                    [
                        "title" => "Sub Home 4",
                        "icon" => "icon sub home 4",
                        "url" => "/subhome4",
                        "image" => "image url"
                    ]
                ]
            ]
        ]
    ],
    [
        "title" => "About",
        "icon" => "about",
        "url" => "/about"
    ],
    [
        "title" => "Contact",
        "icon" => "contact",
        "url" => "/contact"
    ]
];
@endphp

<div x-data="{
    mainMenu: false,
    drawer: false,
    outsideClick: false,
    {{ implode(', ', array_map(function ($item) {
        return $item['title'] . ': false';
    }, $sidebarData)) }},
    tabMenu1: false,
    tabMenu1right: false,
    tabMenu2: false,
    subMenu1: false,
    subMenu1right: false,
    subMenu2: false
}">
    <div class="">
        <!-- drawer init and toggle -->
        <div class="text-center pt-4">
            <button @click="mainMenu = !mainMenu; drawer = !drawer; outsideClick = false"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5"
                type="button">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>
        </div>
        <!-- drawer component -->
        <!-- <div x-show="drawer" class="fixed inset-0 z-20 bg-black opacity-50"></div> -->
        <div x-show="drawer"
            @click.outside=" tabMenu1 = false; drawer = false; tabMenu2 = false; mainMenu = false; subMenu1 = false; subMenu2 = false;"
            class="fixed top-0 left-0 z-40 h-screen overflow-hidden w-80">
            <div x-show="mainMenu" x-transition:enter="transition ease-in-out duration-200 opacity-100 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end=" translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end=" -translate-x-full"
                class="h-screen p-4 overflow-y-auto transition-transform w-80 bg-gray-800 border-r border-gray-700 shadow-lg "
                tabindex="-1">

                <h5 id="drawer-disable-body-scrolling-label" class="text-base font-semibold uppercase text-gray-400">
                    Main Menu</h5>
                <button type="button" @click="mainMenu = !mainMenu; drawer = !drawer"
                    class="text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center hover:bg-gray-600 hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
                <div class="py-4 overflow-y-auto">
                    <ul class="space-y-2 font-medium">
                        @foreach ($sidebarData as $item)
                            <li>
                                <button type="button" @click="{{ $item['title'] }} = !{{ $item['title'] }}; mainMenu = !mainMenu"
                                    class="flex items-center w-full p-2 rounded-lg text-white hover:bg-gray-700">
                                    <svg class="w-5 h-5  transition duration-75 text-gray-400 group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 22 21">
                                        <path
                                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                        <path
                                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                    </svg>
                                    <span class="ms-3">{{ $item['title'] }}</span>
                                </button>
                                @if (isset($item['items']) && is_array($item['items']))
                                <ul>
                                    @foreach ($item['items'] as $subItem)
                                        <li>
                                            <button type="button" class="your-submenu-button-styles">
                                                <span>{{ $subItem['title'] }}</span>
                                                <!-- Add other content for sub-items as needed -->
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            </li>
                        @endforeach
                        <li>
                            <button @click="tabMenu1 = !tabMenu1; mainMenu = !mainMenu; tabMenu1right = true"
                                class="flex items-center w-full p-2 rounded-lg text-white hover:bg-gray-100 hover:bg-gray-700 group">
                                <svg class="w-5 h-5  transition duration-75 text-gray-400 group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 22 21">
                                    <path
                                        d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                    <path
                                        d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                </svg>
                                <span class="ms-3">Menu 1</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" @click="tabMenu2 = !tabMenu2; mainMenu = !mainMenu"
                                class="flex items-center w-full p-2 text-base  transition duration-75 rounded-lg text-white hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-5 h-5  transition duration-750 text-gray-400 group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 21">
                                    <path
                                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                                </svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Menu 2</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- tab-Menu --}}
            {{-- @foreach ($sidebarData as $item)
                @if(isset($item['items']) && is_array($item['items']))
                    @foreach($item['items'] as $subItem)
                    <div x-show="{{ $subItem['title'] }}"
                        x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-200 transform"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                        class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80 border-r bg-gray-700"
                        tabindex="-1">
                        <h5 id="drawer-disable-body-scrolling-label"
                            class="text-base font-semibold uppercase text-gray-400">{{ $item['title'] }}</h5>
                        <button type="button"
                            class="text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m15 19-7-7 7-7" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>

                        <p class="my-6 text-sm text-gray-400">Supercharge your hiring by taking advantage of
                            our <a href="#" class=" underline text-blue-500 hover:no-underline">limited-time
                                sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates
                            and
                            the #1 design job board.122112</p>

                    @endforeach
                @endif
            @endforeach --}}
            <div x-show="tabMenu1" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-100 delay-[290ms] transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                class="absolute top-0 right-0 z-40 h-screen overflow-y-auto transition-transform w-80">
                <div x-show="tabMenu1right" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-100 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform duration-300 bg-gray-700">
                    <h5 id="drawer-disable-body-scrolling-label"
                        class="text-base font-semibold uppercase text-gray-400">
                        Menu 1</h5>
                    <button type="button"
                        @click="tabMenu1right = !tabMenu1right; mainMenu = !mainMenu; tabMenu1 = !tabMenu1"
                        class="text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m15 19-7-7 7-7" />
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>

                    <p class="my-6 text-sm text-gray-400">Supercharge your hiring by taking advantage of
                        our <a href="#" class=" underline text-blue-500 hover:no-underline">limited-time
                            sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates
                        and
                        the #1 design job board.</p>

                    <ul class="space-y-2 font-medium">
                        <li>
                            <button type="button" @click="subMenu1 = !subMenu1; subMenu1right = true"
                                class="w-full p-2 text-left rounded-lg text-white hover:bg-gray-400">
                                <span class="">Sub-Menu 1</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" @click="subMenu2 = !subMenu2"
                                class="w-full p-2 text-left text-base rounded-lg text-white hover:bg-gray-400">
                                <span class="">Sub-menu 2</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-show="tabMenu2" x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-200 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80 border-r bg-gray-700"
                tabindex="-1">

                <h5 id="drawer-disable-body-scrolling-label" class="text-base font-semibold text-gray-400 uppercase">
                    Menu 2</h5>
                <button type="button" @click="tabMenu2 = !tabMenu2; mainMenu = !mainMenu"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>

                <div class="py-4 overflow-y-auto">
                    <p class="my-6 text-sm text-gray-400">Supercharge your hiring by taking advantage of our
                        <a href="#" class=" underline text-blue-500 hover:no-underline">limited-time sale</a>
                        for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates
                        and
                        the #1 design job board.
                    </p>
                </div>
            </div>
            {{-- end-tabMenu --}}
            <!-- sub-menu -->
            <div x-show="subMenu1" x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-200 delay-[290ms] transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80"
                tabindex="-1">
                <div x-show="subMenu1right"
                x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-200 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80 bg-stone-500">
                    <h5 id="drawer-disable-body-scrolling-label" class="text-base font-semibold uppercase text-white">
                        Sub-menu 1</h5>
                    <button type="button" @click="subMenu1 = !subMenu1; subMenu1right = !subMenu1right"
                        class="text-white bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m15 19-7-7 7-7" />
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>

                    <p class="my-6 text-sm text-gray-200">Supercharge your hiring by taking advantage of
                        our <a class=" underline hover:no-underline">limited-time sale
                            </a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates
                    </p>
                </div>

            </div>
            <div x-show="subMenu2" x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-200 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80 bg-stone-500"
                tabindex="-1">

                <h5 id="drawer-disable-body-scrolling-label" class="text-base font-semibold uppercase text-white">
                    Sub-menu 2</h5>
                <button type="button" @click="subMenu2 = !subMenu2"
                    class="text-white bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>

                <p class="my-6 text-sm text-gray-200">Supercharge your hiring by taking advantage of our
                    <a class=" underline hover:no-underline">limited-time sale</a>
                </p>
            </div>
            {{-- end-subMenu --}}
        </div>
    </div>
</div>
