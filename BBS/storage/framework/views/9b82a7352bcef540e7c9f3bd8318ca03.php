<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1>Laravel 掲示板</h1>
    <p>ここは質問、アウトプット用の掲示板になります</p>
    <h2>みんなの記事一覧</h2>
    <table class="table-auto border-solid border-black border-2" style="border-collapse: separate; border-spacing: 0">
        <tr class="bg-green-300">
            <th class="border border-black px-4 py-2 text-center">タイトル</th>
            <th class="border border-black px-4 py-2 text-center">内容</th>
            <th class="border border-black px-2 py-2 text-center">コメント数</th>
        </tr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="border border-black px-4 py-2">
                <a href="<?php echo e(route('post', $post['id'])); ?>" class="text-blue-500"><?php echo e(Str::limit($post['title'], 80, '...')); ?></a>
                </td>
                <td class="border border-black px-4 py-2"><?php echo e(Str::limit($post['content'], 80, '...')); ?></td>
                <td class="border border-black px-2 py-2 text-right"><?php echo e($post->comments()->count()); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH C:\Users\OWNER\Desktop\laravel_app\BBS\resources\views/article.blade.php ENDPATH**/ ?>