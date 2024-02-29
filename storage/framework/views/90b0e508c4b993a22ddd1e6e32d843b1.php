<div>
    
    <h1>Navbar Livewire</h1>
    <div class="">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, facilis officia porro ea, eos velit ut
        veritatis vitae reiciendis consequatur odio aliquam vero! Nesciunt perferendis saepe accusantium eaque iste.
        Sint.Explicabo, impedit ab repellat ipsum fuga laudantium. Animi necessitatibus praesentium beatae. Molestiae
        ipsum molestias beatae facere. Quos aperiam quisquam tempore, dolore recusandae earum ut, incidunt magnam,
        nesciunt explicabo consectetur omnis.
    </div>

    <div class="">
        <div>
            <ul>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menuData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <?php echo e($menuItem['title']); ?>

                        <!--[if BLOCK]><![endif]--><?php if(isset($menuItem['items'])): ?>
                            <ul>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menuItem['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($subItem['title']); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </ul>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </ul>
        </div>
    </div>
</div>


<?php /**PATH /var/www/html/resources/views/livewire/components/navbar/index.blade.php ENDPATH**/ ?>