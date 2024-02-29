<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo $__env->yieldContent('head'); ?>
</head>

<body x-data="{
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
    mainMenu: false, drawer: false, outsideClick: false}" >

    <?php echo $__env->make('components.navbar.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="mt-[150px]">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html><?php /**PATH /var/www/html/resources/views/layouts/default.blade.php ENDPATH**/ ?>