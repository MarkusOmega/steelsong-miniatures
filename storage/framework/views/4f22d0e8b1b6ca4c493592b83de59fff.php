<?php echo csrf_field(); ?>
<div class="mb-3">
    <label class="form-label" for="name">Name </label>
    <input class="form-control" type="text" name="name" id="name" value="<?php echo e(old('name', (!empty($product->name) ? $product->name : null))); ?>">
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="mb-3">
    <label class="form-label" for="description">Description </label>
    <textarea class="form-control" name="description" id="description"><?php echo e(old('name', (!empty($product->description) ? $product->description : null))); ?></textarea>
    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="mb-3">
    <label class="form-label" for="price">Price </label>
    <input class="form-control" type="number" name="price" id="price" value="<?php echo e(old('name', (!empty($product->price) ? $product->price : null))); ?>">
    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="mb-3">
    <label class="form-label" for="discount">Discount </label>
    <input class="form-control" type="number" name="discount" id="discount" value="<?php echo e(old('name', (!empty($product->discount) ? $product->discount : null))); ?>">
    <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="mb-3">
    <label class="form-label" for="stock">Stock </label>
    <input class="form-control" type="number" name="stock" id="stock" value="<?php echo e(old('name', (!empty($product->stock) ? $product->stock : null))); ?>">
    <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="mb-3">
    <label class="form-label" for="image">Image:</label>
    <input class="form-control" type="file" name="image" id="image" value="<?php echo e(old('name', (!empty($product->image) ? $product->image : null))); ?>">
    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="buttons">
    <button class="btn btn-primary" type="submit">Save </button>
</div><?php /**PATH C:\DEV\steelsong-miniatures\resources\views/admin/products/form.blade.php ENDPATH**/ ?>