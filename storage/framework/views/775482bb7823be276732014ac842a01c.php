<?php if (isset($component)) { $__componentOriginal66d7cfd03cd343304d81fe1e21646540 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66d7cfd03cd343304d81fe1e21646540 = $attributes; } ?>
<?php $component = App\View\Components\MainLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('main-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MainLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="banner-large">
        test
    </div>
    <div class="grid-1-2">
        <div class="grid-item">
                test
        </div>
        <div class="grid-item">
                    test
        </div>
        <div class="grid-item">
            test
        </div>
    </div>

    <div class="grid-3-3">
        <div class="grid-item">
            test
        </div>
        <div class="grid-item">
                    test
        </div>
        <div class="grid-item">
            test
        </div>
        <div class="grid-item">
            test
        </div>
        <div class="grid-item">
            test
        </div>
        <div class="grid-item">
            test
        </div>
        <div class="grid-item">
            test
        </div>
        <div class="grid-item">
            test
        </div>
        <div class="grid-item">
            test
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $attributes = $__attributesOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $component = $__componentOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__componentOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?><?php /**PATH C:\DEV\steelsong-miniatures\resources\views/welcome.blade.php ENDPATH**/ ?>