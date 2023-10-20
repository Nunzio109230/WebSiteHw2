<html>
    <head>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url ('css/home.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url ('css/community.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
    <script src="<?php echo e(url ('js/community.js')); ?>" defer="true"></script>
    <script>
            const CLASS_URL= "<?php echo e(url ('search/community')); ?>/";
            const USERS= "<?php echo e(url ('users')); ?>/"; 
    </script>   
    <meta charset="UTF-8">
    </head>
    <body>
    
        <?php $__env->startSection('title', 'community'); ?>
        <?php $__env->startSection('nav'); ?>
                <?php echo \Illuminate\View\Factory::parentPlaceholder('nav'); ?>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <header id="header">
            <h1>Album preferiti dagli utenti</h1>
                <div class="usr_name">
                    <form autocomplete="off">
                    <input type='text' name="user" class="searchbar_usr" placeholder="Username dell'utente">
                    <input type="submit" value="Cerca">
                    </form>
                </div>
                
                <h2 class="msg_error">Nessun utente trovato! Consulta la lista degli utenti e riprova.</h2>
               
        </header>
         <div id="container_album">
            <div class="lista_album"></div>
        </div>
        <h1 class="no_result">Ancora nessun album nei preferiti.</h2>
        <div class="users">
                <h2>Utenti registrati</h2>
                <div id="lista_users">
                    
                </div>
        </div>
        <div id="lista_album">

        </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('footer'); ?>
            <?php echo \Illuminate\View\Factory::parentPlaceholder('footer'); ?>
        <?php $__env->stopSection(); ?>
    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/community.blade.php ENDPATH**/ ?>