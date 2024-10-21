

<?php $__env->startSection('title','About'); ?>


<?php $__env->startSection('content'); ?>
<hr>
<h1><?php echo app('translator')->get('About'); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\proyectos\resources\views/about.blade.php ENDPATH**/ ?>