<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<!-- Fonts -->

<!-- Css -->
<link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/<?php echo e(config('tinymce.licenseKey')); ?>/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script><?php /**PATH C:\DEV\steelsong-miniatures\resources\views/layouts/admin/head.blade.php ENDPATH**/ ?>