<nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm min-vw-100">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <?php echo e(config('app.name')); ?>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <!-- la siguiente manera es mas segura, ante un ataque, no ejecuta el ataque solo lo escribre, lo recomendable es usar la siguiente manera. Esto brinda seguridad. Esto tiene que ver con BLADE lo que hay en HREF-->
                <!-- lo que hay en CLASS es una TERNARIA, es una condicional: condición ? "acción" : "accción 2" -->
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('home')?'active':''); ?>" href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('about')?'active':''); ?>" href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('About'); ?></a></li>
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('contact')?'active':''); ?>" href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
               
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
                </li>
                <?php endif; ?>

               
                </form>
            </ul>
        </div>
    </div> 
</nav><?php /**PATH D:\LARAVEL\proyectos\resources\views/partials/nav.blade.php ENDPATH**/ ?>