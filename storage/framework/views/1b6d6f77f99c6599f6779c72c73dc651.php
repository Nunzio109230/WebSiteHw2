<html>
    <head>
        <title>hw1</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url ('css/signup.css')); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <script src="<?php echo e(url ('js/signup.js')); ?>" defer="true"></script>
        <script>
            const CHECK_URL="<?php echo e(url ('checkData')); ?>";
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>

        <?php if($error == "campi_vuoti"): ?>
        <p id='empty'>Inserire tutti i campi!</p>
        <?php endif; ?>

        <?php if($error == "Email_non_valida"): ?>
        <p id='email_nvalida'>Email non valida!</p>
        <?php endif; ?>

        
        <h1 id="Speace">SpeaceSonG</h1>
        <div class="signup">
                <h1>Iscriviti adesso</h1>
                <a id="link_x" href="<?php echo e(url('login')); ?>"><img src="<?php echo e(url ('/img/x.png')); ?>" id="x"></a>
                <form name="registration_form" class="iscrizione" method="post">
                    <?php echo csrf_field(); ?>
                    <input id="name" type="text" name="name" placeholder="Nome">
                    <input id="surname"type="text" name="surname" placeholder="Cognome">
                    <input id="us_name" type="text" name="us_name" placeholder="Nome utente">
                    <img class="warn_usernameOff" src="<?php echo e(url ('/img/warning.png')); ?>">
                    <div class="usernameOff">
                        <p id="username_exist">Username già in uso</p>
                    </div>
                    <input id="email" type="text" name="email" placeholder="Email">
                    <img class="warn_emailOff" src="<?php echo e(url ('/img/warning.png')); ?>">
                    <div class="emailOff">
                        <p id="email_exist">Email già in uso.</p>
                    </div>
                    <input id="newpass" type="password" name="new_password" placeholder="Nuova password">
                    <img class="warn_passOff" src="<?php echo e(url ('/img/warning.png')); ?>">
                    <div class="passwOff">
                        <p id="pass_exist">
                            La password deve contenere:
                            <br/>1. Almeno 8 caratteri.
                            <br/>2. Almeno una lettera maiuscola.
                            <br/>3. Almeno una lettera minuscola.
                            <br/>4. Almeno un carattere speciale.</p>
                    </div>
                    <input id="confirm_newpass" type="password" name="confirm_new_password" placeholder="Conferma password">
                    <img class="warn_confirm_passOff" src="<?php echo e(url ('/img/warning.png')); ?>">
                    <div class="confirm_passwOff">
                        <p id="confirm_pass_exist">Le password non coincidono.</p>
                    </div>
                    <label>
                        <p class="dateOff">L'età minima richiesta è di 14 anni.</p>
                        <h3 id="date">Data di nascita</h3>
                        <select name='gg' id="gg">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name='mm' id="mm">
                            <option value="1">gen</option>
                            <option value="2">feb</option>
                            <option value="3">mar</option>
                            <option value="4">apr</option>
                            <option value="5">mag</option>
                            <option value="6">giu</option>
                            <option value="7">lug</option>
                            <option value="8">ago</option>
                            <option value="9">set</option>
                            <option value="10">ott</option>
                            <option value="11">nov</option>
                            <option value="12">dic</option>
                        </select>
                        <select name='yy' id="yy">
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                        </select>
                    </label>
                    <input type="submit" id="iscriviti" value="Iscriviti">
                    
                </form>
        </div>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/signup.blade.php ENDPATH**/ ?>