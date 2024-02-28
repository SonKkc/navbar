<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['color' => 'gray','menuItem' ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['color' => 'gray','menuItem' ]); ?>
<?php foreach (array_filter((['color' => 'gray','menuItem' ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div x-show="<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>" 
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-100 delay-[290ms] transform" 
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="absolute right-0 top-0 z-40 h-screen w-80 overflow-y-auto transition-transform">
    <div x-show="<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>right" 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-x-full" 
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-100 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="absolute inset-0 top-0 z-40 h-screen overflow-y-auto bg-white transition-transform duration-300">
        <div <?php echo e($attributes->merge(['class' => 'bg-['.$color.'] relative flex h-16 w-full items-center justify-center border-b border-gray-200 text-center'])); ?>

            class="relative flex h-16 w-full items-center justify-center border-b border-gray-200 bg-[#FBF4E8] text-center">
            <button type="button"
                @click="<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>right = !<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>right; <?php echo e(str_replace(' ', '_', $menuItem['title'])); ?> = !<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>"
                class="absolute left-0 top-1/4 flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-500">
                <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m15 19-7-7 7-7" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <h5 class="flex-1 text-base font-semibold uppercase text-gray-500">
                <?php echo e($menuItem['title']); ?>

            </h5>

        </div>
        <div class="px-4">
            <ul class="divide-y divide-solid py-2 font-medium">
                <?php $__currentLoopData = $menuItem['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($subMenuItem['items'])): ?>
                        <li class="divide-y divide-solid py-2 font-medium">
                            <button type="button" @click="<?php echo e(str_replace(' ', '_', $subMenuItem['title'])); ?> = !<?php echo e(str_replace(' ', '_', $subMenuItem['title'])); ?>; <?php echo e(str_replace(' ', '_', $subMenuItem['title'])); ?>right = true"
                            class="flex w-full justify-between rounded-lg p-2 text-left text-gray-700">
                                <span class=""><?php echo e($subMenuItem['title']); ?></span>
                                <svg class="ml-2 inline-block h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="m9 5 7 7-7 7" />
                                </svg>
                            </button>
                        </li>
                    <?php else: ?>
                    <li class="divide-y divide-solid py-2 font-medium">
                        <a href="<?php echo e($subMenuItem['url']); ?>"
                        class="flex w-full justify-between rounded-lg p-2 text-left text-gray-700">
                            <span class=""><?php echo e($subMenuItem['title']); ?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/components/sidebar/menu.blade.php ENDPATH**/ ?>