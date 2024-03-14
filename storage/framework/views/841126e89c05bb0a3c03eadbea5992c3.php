<div  x-data="{
    <?php $__currentLoopData = $menuData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e(str_replace(' ', '_', $data['title'])); ?>: false,
        <?php echo e(str_replace(' ', '_', $data['title'])); ?>right: false, 
        <?php echo e(str_replace(' ', '_', $data['title'])); ?>dropDown: false,
        <?php if(isset($data['items'])): ?>
            <?php $__currentLoopData = $data['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e(str_replace(' ', '_', $subData['title'])); ?>: false,
                <?php echo e(str_replace(' ', '_', $subData['title'])); ?>right: false,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    mainMenu: false, drawer: false, outsideClick: false}" class="z-40 relative">
    <div class="fixed top-0 inset-0 shadow-lg p-2 h-[150px] border-b border-gray-300 bg-white">
        <div class="min-[1040px]:block sm:hidden max-w-7xl mx-auto">
            <div class="flex items-center justify-between">
                <a class="block cursor-pointer" href="/home" wire:navigate>
                    <img src="<?php echo e(asset('images/wonderbly-logo.svg')); ?>" alt="logo" class="h-20 w-20" />      
                </a>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('particals.search', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3384441263-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <div class="flex items-center gap-2 pe-2">
                    <!--[if BLOCK]><![endif]--><?php if(auth()->check()): ?>
                        
                        <button class="hover:bg-gray-300 rounded-full">
                            
                            <button wire:click="logout">Logout</button>
                        </button>
                    <?php else: ?>
                        
                            <a href="/login" wire:navigate>Login</a>
                            /
                            <a href="/register" wire:navigate>Register</a>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <button class="hover:bg-gray-300 rounded-full">
                        <svg class="w-10 h-10 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-full">
                <!--[if BLOCK]><![endif]--><?php if($menuData): ?>
                <?php if (isset($component)) { $__componentOriginalaa4f372b822ef2944299b460f6943a49 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaa4f372b822ef2944299b460f6943a49 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar.menu','data' => ['menuData' => $menuData]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menuData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menuData)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaa4f372b822ef2944299b460f6943a49)): ?>
<?php $attributes = $__attributesOriginalaa4f372b822ef2944299b460f6943a49; ?>
<?php unset($__attributesOriginalaa4f372b822ef2944299b460f6943a49); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaa4f372b822ef2944299b460f6943a49)): ?>
<?php $component = $__componentOriginalaa4f372b822ef2944299b460f6943a49; ?>
<?php unset($__componentOriginalaa4f372b822ef2944299b460f6943a49); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>

        <div class="min-[1040px]:hidden sm:block" >
            <div class="grid grid-cols-3 gap-3">
                <div class="flex items-center justify-start z-40">
                    <?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.index','data' => ['menuData' => $menuData]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menuData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menuData)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
                </div>
                <div class="flex items-center justify-center">
                    <img src="<?php echo e(asset('images/wonderbly-logo.svg')); ?>" alt="logo" class="h-20 w-20" />
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
   
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menuData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal8ccd801d62d18b34c5a2658730ca6515 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ccd801d62d18b34c5a2658730ca6515 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar.subMenu','data' => ['menuItem' => $menuItem]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.subMenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menuItem' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menuItem)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ccd801d62d18b34c5a2658730ca6515)): ?>
<?php $attributes = $__attributesOriginal8ccd801d62d18b34c5a2658730ca6515; ?>
<?php unset($__attributesOriginal8ccd801d62d18b34c5a2658730ca6515); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ccd801d62d18b34c5a2658730ca6515)): ?>
<?php $component = $__componentOriginal8ccd801d62d18b34c5a2658730ca6515; ?>
<?php unset($__componentOriginal8ccd801d62d18b34c5a2658730ca6515); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>



<?php /**PATH /var/www/html/resources/views/livewire/navbar/navbar.blade.php ENDPATH**/ ?>