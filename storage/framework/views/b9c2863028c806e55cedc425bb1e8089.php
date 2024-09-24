<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('layouts.frontend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body class="font-sans antialiased">
        <?php echo $__env->make('layouts.frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        <div class="main-container">
            <div class="inner">
                <!-- header Content -->
                <?php if(isset($header)): ?>
                    <div class="row row-header">
                       <h1> <?php echo e($header); ?> </h1>
                    </div>
                <?php endif; ?>

                <?php if(\Session::has('success')): ?>
                    <div class="alert alert-success">
                        <ul>
                            <li><?php echo \Session::get('success'); ?></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Page Content -->
                <div class="row">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>

        <?php echo $__env->make('layouts.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH C:\DEV\steelsong-miniatures\resources\views/layouts/main.blade.php ENDPATH**/ ?>