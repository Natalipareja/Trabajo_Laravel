

<?php $__env->startSection('title','Home'); ?>


<?php $__env->startSection('content'); ?>
<hr>
<h1><?php echo app('translator')->get('Home'); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\proyectos\resources\views/home.blade.php ENDPATH**/ ?>