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
    <?php if(!empty($banner)): ?>
        <div class="banner-large">
            <?php echo e($banner->name); ?>

        </div>
    <?php endif; ?>
    
    <div class="grid-1-2 p-0 mt-4">
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
    </div>

    <div class="grid-3-3 p-0 mt-4">
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef7525bc9d749553655055783c107f70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef7525bc9d749553655055783c107f70 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('grid-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $attributes = $__attributesOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__attributesOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef7525bc9d749553655055783c107f70)): ?>
<?php $component = $__componentOriginalef7525bc9d749553655055783c107f70; ?>
<?php unset($__componentOriginalef7525bc9d749553655055783c107f70); ?>
<?php endif; ?>
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