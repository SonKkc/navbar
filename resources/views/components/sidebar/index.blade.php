{{-- open drawer --}}
<div class="text-center">
    <button @click="mainMenu = !mainMenu; drawer = !drawer; outsideClick = false"
        class="flex w-full justify-center py-2.5 text-sm font-medium" type="button">
        <svg class="h-12 w-12 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill=""
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M5 7h14M5 12h14M5 17h14" />
        </svg>
    </button>
</div>

<!-- drawer component -->
<div class="isset-0 fixed top-0 h-fit w-full">
    <div class="relative">
        <div x-show="drawer" class="fixed left-0 z-20 h-full w-full bg-black opacity-50"></div>
        <div class="">

            <div x-show="drawer"
                @click.outside=" 
                @foreach ($menuData as $data)
                    {{ str_replace(' ', '_', $data['title']) }} = false;
                    
                    @if (isset($data['items']))
                        @foreach ($data['items'] as $subData)
                            {{ str_replace(' ', '_', $subData['title']) }} = false;
                        @endforeach
                    @endif
                @endforeach
                drawer = false; mainMenu = false; outsideClick = true"
                class="fixed left-0 top-0 z-40 h-screen w-80 overflow-hidden">
                <div x-show="mainMenu" x-transition:enter="transition ease-in-out duration-200 opacity-100 transform"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end=" translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end=" -translate-x-full"
                    class="absolute relative h-screen w-80 border-r border-gray-300 bg-white px-4 shadow-lg transition-transform"
                    tabindex="-1">
                    <div class="fixed left-80 top-2 z-[40] text-left transition-transform" x-show="mainMenu"
                        x-transition:enter="opacity-0 transform" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="opacity-100 transform"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <button type="button" @click="mainMenu = !mainMenu; drawer = !drawer"
                            class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <div class="overflow-y-auto py-4">
                        <ul class="divide-y divide-solid py-2 font-medium">
                            @foreach ($menuData as $menuItem)
                                <x-sidebar.item :menuItem="$menuItem" />
                            @endforeach
                        </ul>
                    </div>
                </div>
                @foreach ($menuData as $menuItem)
                    @if (isset($menuItem['items']))
                        <x-sidebar.menu :menuItem="$menuItem" color="#FBF4E8" />
                        @foreach ($menuItem['items'] as $subMenuItem)
                            @if (isset($subMenuItem['items']))
                                <x-sidebar.menu :menuItem="$subMenuItem" color="#C1F1A1" />
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- drawer component -->
