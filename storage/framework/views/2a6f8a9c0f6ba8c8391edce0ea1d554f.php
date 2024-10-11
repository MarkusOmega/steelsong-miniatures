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
    <!-- <div class="banner-large">
        <?php if(!empty($product->image)): ?>
            <img src="<?php echo e(Storage::disk('public')->url($product->image)); ?>" alt="Uploaded File">
        <?php endif; ?>
    </div> -->

    <div class="row mt-4">
        <div class="col-6">
            <div class="image">
            <?php if($product->hasMedia()): ?>
                <img src="<?php echo e($product->getFirstMedia()->getUrl()); ?>" alt="product image">
            <?php else: ?>
            <img src="<?php echo e(url('/images/image-placeholder.png')); ?>" alt="product placeholder">
            <?php endif; ?>
            </div>
        </div>
        <div class="col-6">
            <div class="title">
                <h1><?php echo e($product->name); ?></h1>
            </div>
            <div class="tags">
                <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="tag bg-dark rounded-circle p-2 text-white"><?php echo e($category->name); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="description mt-4">
                <p><?php echo e($product->description); ?> </p>
            </div>
            <div class="price mt-2">
                <strong><?php echo e($product->PriceFormat); ?></strong>
            </div>
            <div class="choices">

            </div>
            <div>
                <?php echo e($product->ProductStatus); ?>

            </div>
            <div class="submit mt-2">
                <button type="submit">order</button>
            </div>
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
<?php endif; ?><?php /**PATH C:\DEV\steelsong-miniatures\resources\views/products/detail.blade.php ENDPATH**/ ?>