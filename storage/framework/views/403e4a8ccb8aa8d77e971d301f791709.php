

<?php $__env->startSection('title','Lista de productos'); ?>



<?php $__env->startSection('content'); ?>
<hr>
<h1><?php echo app('translator')->get('Productos'); ?></h1>
<a href="<?php echo e(route('productos.create')); ?>">Crear Producto</a>

<table>
   <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Imagen</th>
    </tr>
    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <tr>
        <td><?php echo e($producto->nombre); ?></td>
        <td><?php echo e($producto->descripcion); ?></td>
        <td><img src="<?php echo e(asset('imagen/'.$producto->imagen)); ?>" alt="" width="200px" height="150px"></td>
        <td><a href="<?php echo e(route('productos.edit', $producto->id)); ?>">Editar</a>
        <form action="<?php echo e(route('productos.delete', $producto->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>;
            <button type="submit">Borrar</button>
        </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\proyectos\resources\views/productos/index.blade.php ENDPATH**/ ?>