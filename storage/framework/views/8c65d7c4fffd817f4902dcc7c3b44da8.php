<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/login.css')); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        
        <h1 id="Speace">SpeaceSonG</h1>
        <main>
            <h1 id="titolo">Per continuare, accedi a SpeaceSonG.</h1>
            <div>
                <a href="<?php echo e(url ('/')); ?>" id="link_x"><img src="img/x.png" id="image_x"></a>
                <form name="login_form" method="post">
                    <?php echo csrf_field(); ?>
                    <input id="usr" type="text" name="username" placeholder="Username" value="<?php echo e(old('username')); ?>">
                    <input id="pass" type="password" name="password" placeholder="Password">
                    <?php if($error=="campi_vuoti"): ?>
                    <div class="credenzialiOn">
                        <h4>Inserire username e password.</h4>
                    </div> 
                    <?php endif; ?>
                    <?php if($error=="credenziali_non_valide"): ?>
                    <div class="credenzialiOn">
                        <h4>Username e/o password errati.</h4>
                    </div> 
                    <?php endif; ?>
                    <input type="submit" id="submit" value="Accedi">
                </form>
                <a id="new_account" href="<?php echo e(url ('signup')); ?>">Non hai un account?</a>
                <a href="<?php echo e(url ('signup')); ?>"><button class="new_account">Crea nuovo account</button></a>
            </div>
        </main>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/login.blade.php ENDPATH**/ ?>