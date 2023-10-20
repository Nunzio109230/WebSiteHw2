
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}">
        <script src="{{ url('js/home.js')}}" defer="true"></script>
        <script>
            const SEARCH_URL="{{ url ('search') }}/";
            const SAVE_URL="{{ url ('save') }}";
            const CSRF_TOKEN = '{{ csrf_token() }}';
            const REMOVE_URL= "{{ url ('remove') }}";
            const LIKE_URL= "{{ url ('like') }}";
        </script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    </head>
    <body>
        @extends('layouts.app')
        @section('title', 'home')
        @section('nav')
                @parent  
        @endsection

        @section('content')
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
        @endsection
            @section('footer')
                @parent
            @endsection
    </body>
</html>