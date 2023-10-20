<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/home.css')); ?>">
        <script src="<?php echo e(url('js/home.js')); ?>" defer="true"></script>
        <script>
            const SEARCH_URL="<?php echo e(url ('search')); ?>/";
            const SAVE_URL="<?php echo e(url ('save')); ?>";
            const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>';
            const REMOVE_URL= "<?php echo e(url ('remove')); ?>";
            const LIKE_URL= "<?php echo e(url ('like')); ?>";
        </script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    </head>
    <body>
        
        <?php $__env->startSection('title', 'home'); ?>
        <?php $__env->startSection('nav'); ?>
                <?php echo \Illuminate\View\Factory::parentPlaceholder('nav'); ?>  
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <header class="header_search">
                <form autocomplete="off">
                    <div class="search_content">
                    <input type='text' name="search" class="searchbar" placeholder="Artista...">
                    <input type="submit" value="Cerca">
                    </div>
                    <div class="no_result_off">
                        <h2>Non sono stati trovati album per questo artista.</h2>
                    </div>
                </form>
        </header>
        <div id="album">
                </div>
        <?php $__env->stopSection(); ?>
            <?php $__env->startSection('footer'); ?>
                <?php echo \Illuminate\View\Factory::parentPlaceholder('footer'); ?>
            <?php $__env->stopSection(); ?>
    </body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/home.blade.php ENDPATH**/ ?>