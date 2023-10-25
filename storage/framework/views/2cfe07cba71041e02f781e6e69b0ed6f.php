<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body style="background-color: #373739;display:flex;justify-content:center">
        <div >
            <div style="display:flex;justify-content:center">
                <a href="/">
                    <img src="/img/logo-com-fundo.png" alt="" width="200px" height="100px"> 
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <?php echo e($slot); ?>

            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Projeto-Laravel\resources\views/layouts/guest.blade.php ENDPATH**/ ?>