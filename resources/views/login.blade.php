<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
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
                <a href="{{ url ('/') }}" id="link_x"><img src="img/x.png" id="image_x"></a>
                <form name="login_form" method="post">
                    @csrf
                    <input id="usr" type="text" name="username" placeholder="Username" value="{{ old('username')}}">
                    <input id="pass" type="password" name="password" placeholder="Password">
                    @if($error=="campi_vuoti")
                    <div class="credenzialiOn">
                        <h4>Inserire username e password.</h4>
                    </div> 
                    @endif
                    @if($error=="credenziali_non_valide")
                    <div class="credenzialiOn">
                        <h4>Username e/o password errati.</h4>
                    </div> 
                    @endif
                    <input type="submit" id="submit" value="Accedi">
                </form>
                <a id="new_account" href="{{url ('signup') }}">Non hai un account?</a>
                <a href="{{url ('signup') }}"><button class="new_account">Crea nuovo account</button></a>
            </div>
        </main>
    </body>
</html>