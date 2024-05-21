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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table-auto border-solid border-black border-2" style="border-collapse: separate; border-spacing: 0">
                <tr class="bg-green-300">
                    <th class="border border-black px-4 py-2">タイトル</th>
                    <th class="border border-black px-4 py-2">内容</th>
                    <th class="border border-black px-4 py-2">更新日時</th>
                    <th class="border border-black px-4 py-2 bg-yellow-300 w-40" colspan="2">操作</th>
                </tr>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border border-black px-4 py-2 text-blue-500">
                            <a href="<?php echo e(route('post', $post['id'])); ?>"><?php echo e($post['title']); ?></a>
                        </td>
                        <td class="border border-black px-4 py-2"><?php echo e(Str::limit($post['content'], 80, '…' )); ?></td>
                        <td class="border border-black px-4 py-2"><?php echo e($post['updated_at']); ?></td>
                        <td class="border border-black px-4 py-2 text-blue-500 text-center"><a href="<?php echo e(route('edit', $post['id'])); ?>">編集</a></td>
                        <td class="border border-black px-4 py-2 text-center">
                            <form method='POST' action="<?php echo e(route('delete', $post['id'])); ?>">
                                <?php echo csrf_field(); ?>
                                <button class="text-red-700" onclick='return confirm("タイトルが「<?php echo e($post->title); ?>」の記事を削除しますか？");'>削除</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
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