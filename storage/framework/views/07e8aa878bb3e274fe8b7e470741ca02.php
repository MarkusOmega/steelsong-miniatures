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
        testing
    </div>

    <?php if (isset($component)) { $__componentOriginal31f45136a2389d31610eb2c1a32be5d9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal31f45136a2389d31610eb2c1a32be5d9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-filter','data' => ['categories' => $categories,'chosenCategory' => $category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'chosenCategory' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($category)]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal31f45136a2389d31610eb2c1a32be5d9)): ?>
<?php $attributes = $__attributesOriginal31f45136a2389d31610eb2c1a32be5d9; ?>
<?php unset($__attributesOriginal31f45136a2389d31610eb2c1a32be5d9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31f45136a2389d31610eb2c1a32be5d9)): ?>
<?php $component = $__componentOriginal31f45136a2389d31610eb2c1a32be5d9; ?>
<?php unset($__componentOriginal31f45136a2389d31610eb2c1a32be5d9); ?>
<?php endif; ?>

    <div class="grid-3-3 p-0 mt-4">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
       
            <a href="<?php echo e(route('product.detail', $product)); ?>" class="grid-item-product">
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
                    <div class="d-flex justify-content-between">
                        <div class="grid-item-price">
                            <?php echo e($product->price_format); ?>

                        </div>
                        <div class="grid-item-price">
                            <?php echo e($product->product_status); ?>

                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div>
            <?php echo e(trans('no products found')); ?>

        </div>
        
        <?php endif; ?>
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