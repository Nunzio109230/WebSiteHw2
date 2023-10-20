<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <?php $__env->startSection('nav'); ?>
            <nav>
                <div class="nav_left">
                <a href="<?php echo e(url('home')); ?>">Home</a>
                </div>      
                <div class="nav_right">
                    <a href="<?php echo e(url('community')); ?>">Community</a>
                    <a href="<?php echo e(url('preferiti')); ?>">Preferiti</a>
                    <div class=login_nav>
                        <a href="<?php echo e(url('profilo')); ?>" id="user">
                                <?php echo e($username); ?>

                        </a>
                        <div class="div_userOff">
                            <a id="profilo" href="<?php echo e(url('profilo')); ?>">Profilo</a>
                            <a id="exit" href="<?php echo e(url('logout')); ?>">Esci</a>
                        </div>
                    </div>      
                </div>
            </nav>
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>

        <?php $__env->startSection('footer'); ?>
        <footer>
                <h1 id="h1_footer">SpeaceSonG</h1>
                <div class="footer_container">
                    <div class="div_footer">
                        <h4>Azienda</h4>
                        <p>Chi siamo</p>
                        <p>Opportunità di lavoro</p>
                    </div>
                    <div class="div_footer">
                        <h4>Community</h4>
                        <p>Per artisti</p>
                        <p>Sviluppatori</p>
                        <p>Pubblicità</p>
                    </div>
                    <div class="div_footer">
                        <h4>Link Utili</h4>
                        <p>Assistenza</p>
                        <p>Diritti del consumatore</p>
                    </div>
                </div>
                <p class="NB">©2023 SpeaceSonG NB 1000014523</p>
            </footer>
        <?php echo $__env->yieldSection(); ?>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/layouts/app.blade.php ENDPATH**/ ?>