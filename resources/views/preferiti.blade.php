<html>
    <head>
    <link rel="stylesheet" type="text/css" href="{{ url ('css/preferiti.css')}}">
    <script src="{{url('js/preferiti.js')}}" defer="true"></script>
    <script>
       const ALBUM_URL="{{url ('content')}}";
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Preferiti</title>
    <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <div id="back">
            <a href="{{ url ('home') }}"><img src="{{url('img/icon_indietro.png')}}"></a>
            </div>
            <div class="music">
                <img src="{{url ('img/music.jpeg')}}">
            </div>
            <h1>Album che ti piacciono.</h1>
            <a id="user"href="{{ url ('profilo') }}">{{$username}} </a><p id="p_user">•</p>
            
        </header>
        <div class="colonne">
        <p id="alb_col">Album</p>
        <p id="art_col">Artista</p>
        <p id="rip_col">Riproduzioni (last fm)</p>
        </div>
        <div class="lista">
        </div>
    </body>
</html>