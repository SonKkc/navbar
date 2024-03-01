<li class="py-2">
    <!--[if BLOCK]><![endif]--><?php if(isset($menuItem['items'])): ?>
        <button @click="<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?> = !<?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>; <?php echo e(str_replace(' ', '_', $menuItem['title'])); ?>right = true"
            class="flex w-full justify-between rounded-lg p-2 text-gray-700">
            <span class="ms-3"><?php echo e($menuItem['title']); ?></span>
            <svg class="ml-2 inline-block h-6 w-6 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="m9 5 7 7-7 7" />
            </svg>
        </button>
    <?php else: ?>
    <a href="<?php echo e($menuItem['url']); ?>" class="flex w-full justify-between rounded-lg p-2 text-gray-700">
        <span class="ms-3"><?php echo e($menuItem['title']); ?></span>
    </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</li>
<?php /**PATH /var/www/html/resources/views/components/sidebar/item.blade.php ENDPATH**/ ?>