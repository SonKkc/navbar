
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
                <?php $__currentLoopData = $menuData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(str_replace(' ', '_', $data['title'])); ?> = false;
                    
                    <?php if(isset($data['items'])): ?>
                        <?php $__currentLoopData = $data['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(str_replace(' ', '_', $subData['title'])); ?> = false;
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menuData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginala32b782029e9220f54e3daa1585103db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala32b782029e9220f54e3daa1585103db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.item','data' => ['menuItem' => $menuItem]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menuItem' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menuItem)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala32b782029e9220f54e3daa1585103db)): ?>
<?php $attributes = $__attributesOriginala32b782029e9220f54e3daa1585103db; ?>
<?php unset($__attributesOriginala32b782029e9220f54e3daa1585103db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala32b782029e9220f54e3daa1585103db)): ?>
<?php $component = $__componentOriginala32b782029e9220f54e3daa1585103db; ?>
<?php unset($__componentOriginala32b782029e9220f54e3daa1585103db); ?>
<?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </ul>
                    </div>
                </div>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menuData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if(isset($menuItem['items'])): ?>
                        <?php if (isset($component)) { $__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.menu','data' => ['menuItem' => $menuItem,'color' => '#FBF4E8']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menuItem' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menuItem),'color' => '#FBF4E8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0)): ?>
<?php $attributes = $__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0; ?>
<?php unset($__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0)): ?>
<?php $component = $__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0; ?>
<?php unset($__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0); ?>
<?php endif; ?>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menuItem['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--[if BLOCK]><![endif]--><?php if(isset($subMenuItem['items'])): ?>
                                <?php if (isset($component)) { $__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.menu','data' => ['menuItem' => $subMenuItem,'color' => '#C1F1A1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['menuItem' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($subMenuItem),'color' => '#C1F1A1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0)): ?>
<?php $attributes = $__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0; ?>
<?php unset($__attributesOriginal01bf3b01a557c75eb9cd135a2177f1b0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0)): ?>
<?php $component = $__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0; ?>
<?php unset($__componentOriginal01bf3b01a557c75eb9cd135a2177f1b0); ?>
<?php endif; ?>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
<!-- drawer component -->
<?php /**PATH /var/www/html/resources/views/components/sidebar/index.blade.php ENDPATH**/ ?>