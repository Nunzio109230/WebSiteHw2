<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ url('css/profilo.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Righteous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
        <script src="{{ url('js/profilo.js') }}" defer="true"></script>
        <script>
            const CHECK_URL="{{ url ('checkData') }}";
            const ALBUM_URL="{{url ('content')}}";
            const CSRF_TOKEN = '{{ csrf_token() }}';
            const DELETE_ACC= "{{ url ('delete/account') }}";
        </script>
        <title>Profilo</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('nav')
    
        @section('content')
        <header>
        <div class="overlayOff"></div>
        <div class="img_profile">
            <form name="form_upload" method="post" action="{{ url('profilo') }}" enctype="multipart/form-data">
                    @csrf
                    <input type='file' name='file' accept='.jpg, .jpeg, image/gif, image/png' id="upload_file"> 
                    <input type='submit' value='Conferma' class="submitOff">
            </form>
            <img id="img_user" src="{{ url ('img/user.png') }}">
            <div class="fotoOff">
            <img id="edit" src="{{ url ('img/edit.png') }}">
            <h3>Scegli foto</h3>
            </div>
        </div>
        <p>Profilo</p>
        <h1>{{$username}}</h1>
        <button class="removeOff" href="{{ url('profilo/remove') }}"><a href="{{ url('profilo/remove') }}">Elimina immagine</a></button>
        <div id="delete">
            <a href="">Elimina account</a>
        </div>
        </header>
        <div class="overlay_confirm_delete">
        <div class="confirm_delete">
            <h3 id="msg">Sei sicuro di voler eliminare l'account?<br> Una volta eliminato non potrà più essere ripristinato.</h3>
            <h3 id="yes"><a href="{{url ('delete/account')}}">Conferma</a></h3>
            <h3 id="no"><a>Annulla</a></h3>
        </div>
        </div>
        <h1 id="txt">Top artisti per {{$username}}</h1>
        <div class="album">
            
        </div>
        @endsection
        
    </body>
</html>