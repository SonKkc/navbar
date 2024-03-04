
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
    
</div><?php /**PATH /var/www/html/resources/views/livewire/particals/search.blade.php ENDPATH**/ ?>