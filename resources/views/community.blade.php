<html>
    <head>
    <link rel="stylesheet" type="text/css" href="{{ url ('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url ('css/community.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
    <script src="{{ url ('js/community.js') }}" defer="true"></script>
    <script>
            const CLASS_URL= "{{ url ('search/community') }}/";
            const USERS= "{{ url ('users') }}/"; 
    </script>   
    <meta charset="UTF-8">
    </head>
    <body>
    @extends('layouts.app')
        @section('title', 'community')
        @section('nav')
                @parent
        @endsection

        @section('content')
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
        @endsection

        @section('footer')
            @parent
        @endsection
    </body>
</html>
