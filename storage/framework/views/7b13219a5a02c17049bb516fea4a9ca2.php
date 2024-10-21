

<?php $__env->startSection('title','Editar producto'); ?>



<?php $__env->startSection('content'); ?>
<h1>Nuevo producto</h1>

<form action="<?php echo e(route('productos.update', $producto)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="">Nombre:</label><br>
    <input type="text" name="nombre" placeholder="Ingrese nombre" value="<?php echo e($producto->nombre); ?>"><br><br>   
    <label for="">Descripcion</label><br>
    <input type="text" name="descripcion" placeholder="Ingrese descripcion" value="<?php echo e($producto->descripcion); ?>"><br><br>   
    <label for="">Imagen actual</label>
    <img src="<?php echo e(asset('imagen/'.$producto->imagen)); ?>" alt="" width="200px" height="150px">
    <label for="">Imagen</label><br>
    <input type="file" name="imagen">
    
    <button type="submit">Editar Producto</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\proyectos\resources\views/productos/edit.blade.php ENDPATH**/ ?>