<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('tittle'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark"">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('home'); ?></a></li>
    
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('about'); ?></a></li>
    
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('contact'); ?></a></li>
            
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('productos.index')); ?>"><?php echo app('translator')->get('products'); ?></a></li>
    
        </ul>
    </nav>



    <?php echo $__env->yieldContent('content'); ?>

</body>

</html><?php /**PATH D:\LARAVEL\proyectos\resources\views/partials/layout.blade.php ENDPATH**/ ?>