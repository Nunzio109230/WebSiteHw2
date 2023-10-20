<html>
    <head>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url ('css/home.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url ('css/classifiche.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
    <script src="<?php echo e(url ('js/classifiche.js')); ?>" defer="true"></script>
    <script>
            const CLASS_URL= "<?php echo e(url ('search/classifiche')); ?>/";
    </script>
    <title>Community</title>
    <meta charset="UTF-8">
    </head>
    <body>
    <nav>
        <div class="nav_left">
            <a href="<?php echo e(url ('home')); ?>">Home</a>
        </div>      
        <div class="nav_right">
            <a href="<?php echo e(url ('classifiche')); ?>">Community</a>
            <a href="<?php echo e(url ('preferiti')); ?>">Preferiti</a>
            <div class=login_nav>
                <a href="<?php echo e(url ('profilo')); ?>" id="user" value="$login">
                    <?php echo e($username); ?>

                    </a>
                    <div class="div_userOff">
                        <a id="profilo" href="<?php echo e(url ('profilo')); ?>">Profilo</a>
                        <a id="exit" href="<?php echo e(url ('esci')); ?>">Esci</a>
                    </div>
            </div>      
        </div>
    </nav>
        <header id="brani">
            <h1>Album preferiti dagli utenti</h1>
                <div class="country">
                    <form autocomplete="off">
                    <input type='text' name="search_country" class="searchbar_country" placeholder="Spain/Italy/Germany...">
                    <input type="submit" value="Cerca">
                    </form>
                </div>
                    <div class="no_result_off">
                        <h2>Non sono stati trovati artisti per questo paese.</h2>
                    </div>
                
            <div class="lista_brani"></div>
        </header>
        <div class="users">
                <h2>Utenti registrati</h2>
        </div>
        <div id="lista_brani">

        </div>
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
    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/classifiche.blade.php ENDPATH**/ ?>