<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section ('nav')
            <nav>
                <div class="nav_left">
                <a href="{{url('home')}}">Home</a>
                </div>      
                <div class="nav_right">
                    <a href="{{url('community')}}">Community</a>
                    <a href="{{url('preferiti')}}">Preferiti</a>
                    <div class=login_nav>
                        <a href="{{url('profilo')}}" id="user">
                                {{$username}}
                        </a>
                        <div class="div_userOff">
                            <a id="profilo" href="{{url('profilo')}}">Profilo</a>
                            <a id="exit" href="{{url('logout')}}">Esci</a>
                        </div>
                    </div>      
                </div>
            </nav>
        @section('content')
        @show

        @section ('footer')
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
        @show
    </body>
</html>