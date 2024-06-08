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
	 <?php $__env->slot('title', null, []); ?> <?php echo e($post['title']); ?> <?php $__env->endSlot(); ?>

    <div class="font-bold p-3 mb-8">
        投稿者：<?php echo e($post->user->name); ?><br>
        <time datetime="<?php echo e($post['created_at']); ?>" itemprop="datepublished">
            投稿日：<?php echo e((new DateTime($post['created_at']))->format("Y年m月d日 G:i:s")); ?><br>
        </time>
        <time datetime="<?php echo e($post['updated_at']); ?>" itemprop="modified">
            最終更新：<?php echo e((new DateTime($post['updated_at']))->format("Y年m月d日 G:i:s")); ?>

        </time>
    </div>

    <h1><?php echo e($post['title']); ?></h1>

    <?php if(isset($post['image_url'])): ?>
        <div><img src="<?php echo e($post['image_url']); ?>" alt="画像が見つかりません"></div>
    <?php endif; ?>

    <div class="not-prose">
        <pre><?php echo e($post['content']); ?></pre>
    </div>

		<h2>みんなのコメント</h2>
    <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="bg-gray-300 p-3 mb-4 not-prose">
            <span class="text-blue-700"><?php echo e($comment->user->name); ?> さんのコメント：</span><br>
            <pre class="whitespace-pre-wrap"><?php echo e($comment['content']); ?></pre>
            <?php if(auth()->guard()->check()): ?>
                <?php if($comment->user->id === Auth::id()): ?>
                <div class="flex flex-row-reverse mt-1">
                        <form method='POST' action="<?php echo e(route('delete_comment', $comment['id'])); ?>">
                            <?php echo csrf_field(); ?>
                            <button type='submit' class="bg-red-600 hover:bg-red-500 text-white rounded px-4 py-2" 
                                    onclick='return confirm("コメント「<?php echo e(Str::limit($comment->content, 20, '...')); ?>」を削除しますか？");'>
                                削除
                            </button>
                        </form>
                        <button class="bg-green-600 hover:bg-green-500 text-white rounded px-4 py-2 mr-2" 
                                type="button" onclick="location.href='<?php echo e(route('edit_comment', $comment['id'])); ?>'">
                            編集
                        </button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>コメントはまだありません。</p>
    <?php endif; ?>
		
    <?php if(auth()->guard()->check()): ?>
        <h2>コメントを投稿する</h2>
        <form class="grid grid-cols-1 gap-6 text-black" method='POST' action="<?php echo e(route('store_comment')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type='hidden' name='post_id' value="<?php echo e($post['id']); ?>">
            <label class="block">
                <textarea name='content'
                    class="mt-1 block w-96 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    rows="3"></textarea>
            </label>
            <button type='submit' class="w-20 bg-blue-600 hover:bg-blue-500 text-white rounded px-4 py-2">投稿</button>
        </form>
    <?php else: ?>
        <p>ログインするとコメントを投稿することができます。</p>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH C:\Users\OWNER\Desktop\laravel_app\BBS\resources\views/post.blade.php ENDPATH**/ ?>