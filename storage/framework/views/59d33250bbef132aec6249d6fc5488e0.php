<div x-data="{mainMenu: false, tabMenu1: false, tabMenu2: false, drawer: false, subMenu1: false, subMenu2: false, outsideClick: false, tabMenu1right: false, subMenu1right: false }"
    class="relative">
    <div x-show="drawer" class="fixed left-0 w-full h-full z-20 bg-black opacity-50"></div>
    <div class="">
        <!-- drawer init and toggle -->
        <div class="text-center">
            <button @click="mainMenu = !mainMenu; drawer = !drawer; outsideClick = false"
                class="flex justify-center font-medium text-sm w-full py-2.5"
                type="button">
                <svg class="w-12 h-12 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill=""
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
                class="absolute h-screen px-4 transition-transform w-80 bg-white border-r border-gray-300 shadow-lg relative"
                tabindex="-1">
                <div class="fixed top-2 right-2 text-left z-[40]">
                    <button type="button" @click="mainMenu = !mainMenu; drawer = !drawer"
                        class="text-white bg-transparent rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <div class="py-4 overflow-y-auto">
                    <ul class="font-medium divide-y divide-solid py-2">
                        <li class="py-2">
                            <button @click="tabMenu1 = !tabMenu1; mainMenu = !mainMenu; tabMenu1right = true"
                                class="flex justify-between w-full p-2 rounded-lg text-gray-700">
                                <span class="ms-3">Menu 1</span>
                                <svg class="w-6 h-6 inline-block text-gray-700 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button type="button" @click="tabMenu2 = !tabMenu2; mainMenu = !mainMenu"
                                class="flex justify-between w-full p-2 rounded-lg text-gray-700">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Menu 2</span>
                                <svg class="w-6 h-6 inline-block text-gray-700 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
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
                class="absolute top-0 right-0 z-40 h-screen overflow-y-auto transition-transform w-80">
                <div x-show="tabMenu1right" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-100 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="absolute top-0 inset-0 z-40 h-screen overflow-y-auto transition-transform duration-300 bg-white">
                    <div class="flex items-center justify-center text-center bg-[#FBF4E8] w-full h-16 border-b border-gray-200 relative">
                        <button type="button" @click="tabMenu1right = !tabMenu1right; mainMenu = !mainMenu; tabMenu1 = !tabMenu1"
                            class="absolute top-1/4 left-0 text-gray-500 bg-transparent rounded-lg text-sm w-8 h-8 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m15 19-7-7 7-7" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <h5 class="flex-1 text-base font-semibold uppercase text-gray-500">
                            Menu 1
                        </h5>

                    </div>
                    <div class="px-4">
                    <ul class="font-medium divide-y divide-solid py-2">
                        <li  class="font-medium divide-y divide-solid py-2">
                            <button type="button" @click="subMenu1 = !subMenu1; subMenu1right = true"
                            class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                                <span class="">Sub-Menu 1</span>
                                <svg class="w-6 h-6 inline-block ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
                                </svg>
                            </button>
                        </li>
                        <li  class="font-medium divide-y divide-solid py-2">
                            <button type="button" @click="subMenu2 = !subMenu2"
                            class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                                <span class="">Sub-menu 2</span>
                                <svg class="w-6 h-6 inline-block ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
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

            </div>
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
                class="absolute top-0 right-0 z-40 h-screen overflow-y-auto transition-transform w-80 bg-white">
                    <div class="flex items-center justify-center text-center bg-[#C1F1A1] w-full h-16 border-b border-gray-200 relative">
                        <h5 class="text-base font-semibold uppercase text-gray-500">
                            Sub-Menu 1
                        </h5>
                        <button type="button" @click="subMenu1 = !subMenu1; subMenu1right = !subMenu1right"
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
                            <li class="font-medium divide-y divide-solid py-2">
                                <a href="#"
                                    class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                                    <span class="">Sub-Menu 1.1</span>
                                </a>
                            </li>
                            <li class="font-medium divide-y divide-solid py-2">
                                <a href="#"
                                    class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
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
<?php /**PATH /var/www/html/resources/views/components/navbarAnonymuos.blade.php ENDPATH**/ ?>