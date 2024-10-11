<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('admin')); ?>">ADMIN AREA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">

                <a class="nav-link <?php echo e((\Route::current()->getName() == 'products.index') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('products.index')); ?>">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e((\Route::current()->getName() == 'categories.index') ? 'active' : ''); ?>" href="<?php echo e(route('categories.index')); ?>">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e((\Route::current()->getName() == 'content.index') ? 'active' : ''); ?>" href="<?php echo e(route('contents.index')); ?>">Content</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e((\Route::current()->getName() == 'news.index') ? 'active' : ''); ?>" href="<?php echo e(route('news.index')); ?>">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e((\Route::current()->getName() == 'settings.index') ? 'active' : ''); ?>" href="">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e((\Route::current()->getName() == 'users.index') ? 'active' : ''); ?>" href="">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e((\Route::current()->getName() == 'orders.index') ? 'active' : ''); ?>" href="">Orders</a>
            </li>
        </ul>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <?php echo e(__('Log Out')); ?>

                </a>
            </form>
        </div>
    </div>
</nav>
<?php /**PATH C:\DEV\steelsong-miniatures\resources\views/layouts/admin/header.blade.php ENDPATH**/ ?>