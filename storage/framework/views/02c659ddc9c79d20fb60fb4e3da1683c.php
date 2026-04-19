

<?php $__env->startSection('logo'); ?>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-20 w-20 text-blue-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
    </svg>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginala29c4b6de1220dbc50317dc759b47929 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala29c4b6de1220dbc50317dc759b47929 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title','data' => ['text' => 'Prueba','size' => 'xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Prueba','size' => 'xl']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala29c4b6de1220dbc50317dc759b47929)): ?>
<?php $attributes = $__attributesOriginala29c4b6de1220dbc50317dc759b47929; ?>
<?php unset($__attributesOriginala29c4b6de1220dbc50317dc759b47929); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala29c4b6de1220dbc50317dc759b47929)): ?>
<?php $component = $__componentOriginala29c4b6de1220dbc50317dc759b47929; ?>
<?php unset($__componentOriginala29c4b6de1220dbc50317dc759b47929); ?>
<?php endif; ?>
    <p>text text text<p>

    <?php if (isset($component)) { $__componentOriginale6d722acc98ab507c0492caf00830a15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6d722acc98ab507c0492caf00830a15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.testbutton','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('testbutton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <p class='me-2'>Create </p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
        </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6d722acc98ab507c0492caf00830a15)): ?>
<?php $attributes = $__attributesOriginale6d722acc98ab507c0492caf00830a15; ?>
<?php unset($__attributesOriginale6d722acc98ab507c0492caf00830a15); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6d722acc98ab507c0492caf00830a15)): ?>
<?php $component = $__componentOriginale6d722acc98ab507c0492caf00830a15; ?>
<?php unset($__componentOriginale6d722acc98ab507c0492caf00830a15); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\angry\Desktop\breeze\resources\views/prueba.blade.php ENDPATH**/ ?>