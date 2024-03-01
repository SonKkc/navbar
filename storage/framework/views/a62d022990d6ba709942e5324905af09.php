<div class="mt-7 flex items-center gap-4">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menuData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div 
        <?php if(isset($menuItem['items'])): ?> 
        x-on:mouseenter="<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>dropDown = true"
        <?php endif; ?>
        <?php if(isset($menuItem['items'])): ?> 
        x-on:mouseleave="<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>dropDown = false"
        <?php endif; ?>
            class="flex items-center border-b-4 border-white text-gray-700 hover:border-[#1e5751] hover:text-[#1e5751]">
            <!--[if BLOCK]><![endif]--><?php if(isset($menuItem['items'])): ?>
                <div class="flex items-center justify-between">
                    <span class="text-lg"><?php echo e($menuItem['title']); ?></span>
                    <button class="pe-1 text-center text-lg">
                        <svg class="h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.25" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            <?php else: ?>
                <a class="flex items-center">
                    <span class="text-lg"><?php echo e($menuItem['title']); ?></span>
                </a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

</div>
<?php /**PATH /var/www/html/resources/views/livewire/navbar/menu.blade.php ENDPATH**/ ?>