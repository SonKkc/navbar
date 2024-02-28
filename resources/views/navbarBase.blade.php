<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
    <div x-data="{ mainMenu: false, tabMenu1: false, tabMenu2: false, drawer: false, subMenu1: false, subMenu2: false, outsideClick: false, tabMenu1right: false, subMenu1right: false }" class="relative">
        <div x-show="drawer" class="fixed left-0 z-20 h-full w-full bg-black opacity-50"></div>
        <div class="">
            <!-- drawer init and toggle -->
            <div class="text-center">
                <button @click="mainMenu = !mainMenu; drawer = !drawer; outsideClick = false"
                    class="flex w-full justify-center py-2.5 text-sm font-medium" type="button">
                    <svg class="h-12 w-12 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill=""
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>
            <!-- drawer component -->
            <!-- <div x-show="drawer" class="fixed inset-0 z-20 bg-black opacity-50"></div> -->
            <div x-show="drawer"
                @click.outside=" tabMenu1 = false; drawer = false; tabMenu2 = false; mainMenu = false; subMenu1 = false; subMenu2 = false;"
                class="fixed left-0 top-0 z-40 h-screen w-80 overflow-hidden">
    
                <div x-show="mainMenu" x-transition:enter="transition ease-in-out duration-200 opacity-100 transform"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end=" translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end=" -translate-x-full"
                    class="absolute relative h-screen w-80 border-r border-gray-300 bg-white px-4 shadow-lg transition-transform"
                    tabindex="-1">
                    <div class="fixed right-2 top-2 z-[40] text-left">
                        <button type="button" @click="mainMenu = !mainMenu; drawer = !drawer"
                            class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <div class="overflow-y-auto py-4">
                        <ul class="divide-y divide-solid py-2 font-medium">
                            <li class="py-2">
                                <button @click="tabMenu1 = !tabMenu1; mainMenu = !mainMenu; tabMenu1right = true"
                                    class="flex w-full justify-between rounded-lg p-2 text-gray-700">
                                    <span class="ms-3">Menu 1</span>
                                    <svg class="ml-2 inline-block h-6 w-6 text-gray-700" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1" d="m9 5 7 7-7 7" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" @click="tabMenu2 = !tabMenu2; mainMenu = !mainMenu"
                                    class="flex w-full justify-between rounded-lg p-2 text-gray-700">
                                    <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Menu 2</span>
                                    <svg class="ml-2 inline-block h-6 w-6 text-gray-700" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1" d="m9 5 7 7-7 7" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
    
                <div x-show="tabMenu1" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-100 delay-[290ms] transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                    class="absolute right-0 top-0 z-40 h-screen w-80 overflow-y-auto transition-transform">
                    <div x-show="tabMenu1right" x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in duration-100 transform"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                        class="absolute inset-0 top-0 z-40 h-screen overflow-y-auto bg-white transition-transform duration-300">
                        <div
                            class="relative flex h-16 w-full items-center justify-center border-b border-gray-200 bg-[#FBF4E8] text-center">
                            <button type="button"
                                @click="tabMenu1right = !tabMenu1right; mainMenu = !mainMenu; tabMenu1 = !tabMenu1"
                                class="absolute left-0 top-1/4 flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-500 hover:bg-gray-600 hover:text-white">
                                <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m15 19-7-7 7-7" />
                                </svg>
                                <span class="sr-only">Close menu</span>
                            </button>
                            <h5 class="flex-1 text-base font-semibold uppercase text-gray-500">
                                Menu 1
                            </h5>
    
                        </div>
                        <div class="px-4">
                            <ul class="divide-y divide-solid py-2 font-medium">
                                <li class="divide-y divide-solid py-2 font-medium">
                                    <button type="button" @click="subMenu1 = !subMenu1; subMenu1right = true"
                                        class="flex w-full justify-between rounded-lg p-2 text-left text-gray-700">
                                        <span class="">Sub-Menu 1</span>
                                        <svg class="ml-2 inline-block h-6 w-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1" d="m9 5 7 7-7 7" />
                                        </svg>
                                    </button>
                                </li>
                                <li class="divide-y divide-solid py-2 font-medium">
                                    <button type="button" @click="subMenu2 = !subMenu2"
                                        class="flex w-full justify-between rounded-lg p-2 text-left text-gray-700">
                                        <span class="">Sub-menu 2</span>
                                        <svg class="ml-2 inline-block h-6 w-6" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1" d="m9 5 7 7-7 7" />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div x-show="tabMenu2" x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-200 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="absolute right-0 top-0 z-40 h-screen w-80 overflow-y-auto border-r bg-gray-700 p-4 transition-transform"
                    tabindex="-1">
    
                    <h5 id="drawer-disable-body-scrolling-label" class="text-base font-semibold uppercase text-gray-400">
                        Menu 2</h5>
                    <button type="button" @click="tabMenu2 = !tabMenu2; mainMenu = !mainMenu"
                        class="absolute end-2.5 top-2.5 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-600">
                        <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m15 19-7-7 7-7" />
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
    
                </div>
                <!-- sub-menu -->
                <div x-show="subMenu1" x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-200 delay-[290ms] transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                    class="absolute right-0 top-0 z-40 h-screen w-80 overflow-y-auto p-4 transition-transform"
                    tabindex="-1">
                    <div x-show="subMenu1right"
                        x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-200 transform"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                        class="absolute right-0 top-0 z-40 h-screen w-80 overflow-y-auto bg-white transition-transform">
                        <div
                            class="relative flex h-16 w-full items-center justify-center border-b border-gray-200 bg-[#C1F1A1] text-center">
                            <h5 class="text-base font-semibold uppercase text-gray-500">
                                Sub-Menu 1
                            </h5>
                            <button type="button" @click="subMenu1 = !subMenu1; subMenu1right = !subMenu1right"
                                class="absolute left-0 top-1/4 flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-500">
                                <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m15 19-7-7 7-7" />
                                </svg>
                                <span class="sr-only">Close menu</span>
                            </button>
                        </div>
                        <div class="px-4">
                            <ul class="divide-y divide-solid py-2 font-medium">
                                <li class="divide-y divide-solid py-2 font-medium">
                                    <a href="#"
                                        class="flex w-full justify-between rounded-lg p-2 text-left text-gray-700">
                                        <span class="">Sub-Menu 1.1</span>
                                    </a>
                                </li>
                                <li class="divide-y divide-solid py-2 font-medium">
                                    <a href="#"
                                        class="flex w-full justify-between rounded-lg p-2 text-left text-gray-700">
                                        <span class="">Sub-Menu 1.2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <div x-data="{ showModal: false }">
        <!-- Trigger -->
        <div x-on:mouseenter="showModal = true" x-on:mouseleave="showModal = false">
          Hover để mở modal
        </div>
      
        <!-- Modal -->
        <div x-show="showModal" x-on:click.away="showModal = false">
          <!-- Nội dung modal ở đây -->
          Modal đã mở ra khi bạn hover!
        </div>
      </div>
</body>
</html>
