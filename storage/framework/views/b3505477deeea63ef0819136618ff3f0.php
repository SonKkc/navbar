<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title><?php echo e($title ?? 'Page Title'); ?></title>
    </head>
    <body>
        <?php echo e($slot); ?>

    </body>
</html>
<?php /**PATH /var/www/html/resources/views//components/layouts/app.blade.php ENDPATH**/ ?>