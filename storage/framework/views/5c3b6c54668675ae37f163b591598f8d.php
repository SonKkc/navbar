<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <title><?php echo e($title ?? 'Page Title'); ?></title>
    </head>
    <style>
        ::-webkit-scrollbar {
            width: 5px;
        }
        
        ::-webkit-scrollbar-thumb {
            background-color: #00000073; /* Màu nền cho thanh cuộn */
        }
        
        ::-webkit-scrollbar-track {
            background-color: #f1f1f1; /* Màu nền cho phần đường track */
        }
        </style>
    <body>
       <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('navbar.navbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1921158335-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="mt-[150px]">
            <?php echo e($slot); ?>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>