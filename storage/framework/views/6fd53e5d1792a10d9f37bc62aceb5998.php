

<?php $__env->startSection('title','Crear producto'); ?>



<?php $__env->startSection('content'); ?>
<h1>Nuevo producto</h1>

<form action="<?php echo e(route('productos.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="">Nombre:</label><br>
    <input type="text" name="nombre" placeholder="Ingrese nombre" value="<?php echo e(old('nombre')); ?>"><br><br>   
    <label for="">Descripcion</label><br>
    <input type="text" name="descripcion" placeholder="Ingrese descripcion" value="<?php echo e(old('descripcion')); ?>"><br><br>   
    <label for="">Imagen</label><br>
    <input type="file" name="imagen">
    
    <button type="submit">Guardar Producto</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\proyectos\resources\views/productos/create.blade.php ENDPATH**/ ?>