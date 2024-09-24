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
     <?php $__env->slot('header', null, []); ?> 
    <?php echo e(trans('general.shop')); ?>

     <?php $__env->endSlot(); ?>
    
    <div class="banner-large">
        test
    </div>

    <div class="grid-3-3">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
            <a href="<?php echo e(route('product.detail', $product)); ?>" class="grid-item">
                <div class="grid-item-title"> 
                    <h3>
                    <?php echo e($product->name); ?> 
                    </h3>    
                </div>
                <div class="grid-item-content"> 
                    <div class="grid-item-description">
                        <?php echo e(\Illuminate\Support\Str::limit($product->description, 100, '...')); ?>

                    </div>
                    <hr>
                    <div class="grid-item-price">
                        <?php echo e($product->price_format); ?>

                    </div>
                    <div class="grid-item-price">
                        <?php echo e($product->product_status); ?>

                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div>
        <?php echo e($products->onEachSide(5)->links()); ?>

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
<?php endif; ?><?php /**PATH C:\DEV\steelsong-miniatures\resources\views/products/index.blade.php ENDPATH**/ ?>