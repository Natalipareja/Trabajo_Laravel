

<?php $__env->startSection('title','contact'); ?>


<?php $__env->startSection('content'); ?>
<hr>
<h1><?php echo app('translator')->get('Contact'); ?></h1>




<form method="POST" action="">
    <!-- Directiva de blade que me deja enviar el formulario correctamente <?php echo csrf_field(); ?> genera un token osea un codigo con letras aleatorias, para darle protección  -->
    <?php echo csrf_field(); ?>
    <!-- Los contenidos del value me guardan los datos lo que había en los campos del formulario para cuando las validaciones fallen OLD, en textarea no lleva VALUE sino que el valor va dentro de las dos etiquetas -->
    <input type="text" name="name" placeholder="Ingrese su nombre" Value="<?php echo e(old('name')); ?>"><br>
    <!-- las 2 llaves a los lados me imprimen, se pone llaves y dos signos de explamación para que ejecute el codigo y no que lo imprima en pantalla -->
    <?php echo $errors->first("name", ":message <br>"); ?>

    
    <input type="text" name="email" placeholder="Ingrese su email"Value="<?php echo e(old('email')); ?>"><br>
    <?php echo $errors->first("email", ":message <br>"); ?>

    <input type="text"name="subject" placeholder="Ingrese el asunto"Value="<?php echo e(old('subject')); ?>"><br>
    <?php echo $errors->first("subject", ":message <br>"); ?>

    <textarea name="content" placeholder="Ingrese el mensaje" ><?php echo e(old('content')); ?></textarea><br>
    <?php echo $errors->first("content", ":message <br>"); ?>

    <button>Enviar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL\proyectos\resources\views/contact.blade.php ENDPATH**/ ?>