<?php if (isset($component)) { $__componentOriginaldd4bc009aa56715a76e97f9a7a41b25a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd4bc009aa56715a76e97f9a7a41b25a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app.navbar','data' => ['title' => $title ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title ?? null)]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd4bc009aa56715a76e97f9a7a41b25a)): ?>
<?php $attributes = $__attributesOriginaldd4bc009aa56715a76e97f9a7a41b25a; ?>
<?php unset($__attributesOriginaldd4bc009aa56715a76e97f9a7a41b25a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd4bc009aa56715a76e97f9a7a41b25a)): ?>
<?php $component = $__componentOriginaldd4bc009aa56715a76e97f9a7a41b25a; ?>
<?php unset($__componentOriginaldd4bc009aa56715a76e97f9a7a41b25a); ?>
<?php endif; ?><?php /**PATH /Users/jaimeconsulta/Downloads/feedbacksystem-main/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>