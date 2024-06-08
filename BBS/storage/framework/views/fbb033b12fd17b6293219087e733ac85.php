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
  <div class="flex items-center">
    <div class="flex flex-col items-center justify-center">
      <img src="<?php echo e(asset('storage/domaso.png')); ?>" alt="">
      <h1 class="sans">エンジニア広場</h1>
      <div class="flex">
        <?php if (isset($component)) { $__componentOriginala54d99ad90b9f1bc32f345dcfc8a8f81 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala54d99ad90b9f1bc32f345dcfc8a8f81 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article-up-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-up-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala54d99ad90b9f1bc32f345dcfc8a8f81)): ?>
<?php $attributes = $__attributesOriginala54d99ad90b9f1bc32f345dcfc8a8f81; ?>
<?php unset($__attributesOriginala54d99ad90b9f1bc32f345dcfc8a8f81); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala54d99ad90b9f1bc32f345dcfc8a8f81)): ?>
<?php $component = $__componentOriginala54d99ad90b9f1bc32f345dcfc8a8f81; ?>
<?php unset($__componentOriginala54d99ad90b9f1bc32f345dcfc8a8f81); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal2e8e717064e297895304d2d199ee6cd8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e8e717064e297895304d2d199ee6cd8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.create-article-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('create-article-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e8e717064e297895304d2d199ee6cd8)): ?>
<?php $attributes = $__attributesOriginal2e8e717064e297895304d2d199ee6cd8; ?>
<?php unset($__attributesOriginal2e8e717064e297895304d2d199ee6cd8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e8e717064e297895304d2d199ee6cd8)): ?>
<?php $component = $__componentOriginal2e8e717064e297895304d2d199ee6cd8; ?>
<?php unset($__componentOriginal2e8e717064e297895304d2d199ee6cd8); ?>
<?php endif; ?>
      </div>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH C:\Users\OWNER\Desktop\laravel_app\BBS\resources\views/welcome.blade.php ENDPATH**/ ?>