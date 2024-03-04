
<div x-data="{searchdropdown: false}" class="max-h-[500px] min-h-16 w-[700px]">
    <div class="w-[700px] p-2 border-2 border-gray-400 rounded mb-2 flex flex-col">
        <div @click.outside="searchdropdown = false" class="flex items-center">
            <input @click="searchdropdown = true"  id="search" wire:model.live="search" class="outline-0 border-0 w-full" type="text" placeholder="search our store..."></input>
            <label for="search" class="">
                <svg class="w-8 h-8 text-gray-800 pe-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                  </svg>
            </label>
        </div>
    </div>
    {{-- <div x-show="searchdropdown" 
    x-transition:enter="transition ease-out duration-300 opacity-0"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" "
    x-transition:leave="transition ease-in duration-300 opacity-100"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-full opacity-0"
    class="transition-tranform max-h-[500px] w-full overflow-auto w-full absolute inset-0 top-[80px] bg-white shadow-lg overflow-hidden">
        <ul>
            @foreach($products as $product)
                <li><a href="#" class="text-lg text-gray-700 hover:text-[#1e5751] py-3">{{$product->name}}</a></li>
            @endforeach
        </ul>
    </div>
    <div x-show="searchdropdown" class="fixed left-0 z-[-1] h-full w-full bg-black opacity-50"></div> --}}
</div>