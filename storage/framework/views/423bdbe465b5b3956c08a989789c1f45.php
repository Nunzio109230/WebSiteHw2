<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/profilo.css')); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
        <script src="<?php echo e(url('js/profilo.js')); ?>" defer="true"></script>
        <script>
            const CHECK_URL="<?php echo e(url ('checkData')); ?>";
            const ALBUM_URL="<?php echo e(url ('content')); ?>";
            const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>';
            const DELETE_ACC= "<?php echo e(url ('delete/account')); ?>";
        </script>
        <title>Profilo</title>
    </head>
    <body>
        
        <?php $__env->startSection('nav'); ?>
    
        <?php $__env->startSection('content'); ?>
        <header>
        <div class="overlayOff"></div>
        <div class="img_profile">
            <form name="form_upload" method="post" action="<?php echo e(url('profilo')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type='file' name='file' accept='.jpg, .jpeg, image/gif, image/png' id="upload_file"> 
                    <input type='submit' value='Conferma' class="submitOff">
            </form>
            <img id="img_user" src="<?php echo e(url ('img/user.png')); ?>">
            <div class="fotoOff">
            <img id="edit" src="<?php echo e(url ('img/edit.png')); ?>">
            <h3>Scegli foto</h3>
            </div>
        </div>
        <p>Profilo</p>
        <h1><?php echo e($username); ?></h1>
        <button class="removeOff" href="<?php echo e(url('profilo/remove')); ?>"><a href="<?php echo e(url('profilo/remove')); ?>">Elimina immagine</a></button>
        <div id="delete">
            <a href="">Elimina account</a>
        </div>
        </header>
        <div class="overlay_confirm_delete">
        <div class="confirm_delete">
            <h3 id="msg">Sei sicuro di voler eliminare l'account?<br> Una volta eliminato non potrà più essere ripristinato.</h3>
            <h3 id="yes"><a href="<?php echo e(url ('delete/account')); ?>">Conferma</a></h3>
            <h3 id="no"><a>Annulla</a></h3>
        </div>
        </div>
        <h1 id="txt">Top artisti per <?php echo e($username); ?></h1>
        <div class="album">
            
        </div>
        <?php $__env->stopSection(); ?>
        
    </body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/profilo.blade.php ENDPATH**/ ?>