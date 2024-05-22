<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> ダッシュボード <?php $__env->endSlot(); ?>

     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>（あなたの記事一覧）
        </h2>
     <?php $__env->endSlot(); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="border rounded-xl border-blue-500 mt-10 mb-5 pl-10 mr-96 ml-96">
            <div class="flex pt-5">
                <img class="h-10 w-10" src="<?php echo e(asset('storage/domaso.png')); ?>" alt="">
                <p class="text-lg mt-2 mb-2"><?php echo e($post->user->name); ?></p>
            </div>
            <p class="text-2xl pt-3 pb-5"><a class="hover:text-gray-500" href="<?php echo e(route('post', $post['id'])); ?>"><?php echo e(Str::limit($post['title'], 30, '...')); ?></a></p>
            <p class="text-gray-400"><?php echo e(Str::limit($post['content'], 80, '…' )); ?></p>
            <p class="text-xs mt-5"><?php echo e((new DateTime($post['created_at']))->format("Y年m月d日")); ?></p>
            <div class="flex flex-row-reverse gap-5 mr-10 mb-3">
                <form method="POST" action="<?php echo e(route('delete', $post['id'])); ?>">
                    <?php echo csrf_field(); ?>
                    <button class="underline hover:text-red-500" onclick='return confirm("タイトルが「<?php echo e($post->title); ?>」の記事を削除しますか？");'>削除</button>
                </form>
                <p><a class="underline hover:text-blue-500" href="<?php echo e(route('edit', $post['id'])); ?>">編集</a></p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\OWNER\Desktop\laravel_app\BBS\resources\views/dashboard.blade.php ENDPATH**/ ?>