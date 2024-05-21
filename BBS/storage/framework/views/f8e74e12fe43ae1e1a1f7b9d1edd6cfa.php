<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e((isset($title) ? $title . ' | ' : '') . config('app.name', 'Laravel')); ?></title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="bg-sky-100">
        <div class="flex justify-between">
            <div class="flex flex-wrap mb-8">
                <div class="px-4 py-4">
                    <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">トップページ</a>
                </div>
                <div class="px-4 py-4">
                    <a href="article" class="text-sm text-gray-700 dark:text-gray-500 underline">output</a>
                </div>
                <d>
            </div>
            <div>
                <?php if(Route::has('login')): ?>
                    <div class="px-4 py-4 text-right sm:block">
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">ダッシュボード</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="font-sans text-gray-900 antialiased">
            <div class=" mx-auto prose">
                <?php echo e($slot); ?>

            </div>
        </div>
        <!-- <footer class="flex items-end text-white h-10 text-center mt-10">
            <small class="leading-10">© <?php echo e(config('app.name')); ?></small>
        </footer> -->
    </body>
</html><?php /**PATH C:\Users\OWNER\Desktop\laravel_app\BBS\resources\views/layouts/guest.blade.php ENDPATH**/ ?>