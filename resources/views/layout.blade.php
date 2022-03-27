<html>
<head>
    <title>Website</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
</head>
<body>
    <nav>
        @auth
           <div class="center">
           <div class="nav__choices">
            <div><a href="/"><img src="{{ asset('house.png') }}"  class="img__nav" alt="Home icon"></a></div>
            <div> <a href="/article/{id}"><img src="{{ asset('cloche.png') }}" class="img__nav2" alt="Profil icon"></a></div>
            <div> <a href="/about"><img src="{{ asset('aboutnav.png') }}" class="img__nav" alt="Profil icon"></a></div>
            </div>
            <p>Bon retour parmis nous {{Auth::user()->name}} !<p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
        <div class="center">
        <div class="nav__choices2">
            <div>
            <a href="/login">login</a>
            <a href="/register">register</a>
            </div>
        </div>
            @endauth
            </div>
    </nav>
        </center>

    <main id="pjax-container">

        <audio id="lecteur">

        </audio>
        <div class="lecteur_perso absolute bottom-0 left-0 right-0 h-1/3">
            <div id="infos">
            </div>
            <div class="time">
                <span class="start"></span>
                <button id="button_play" class="pause"></button>
                <span class="end"></span>
            </div>
            <div class="progress">
                <div class="progress-bar">
                    <div class="now"></div>
                </div>
            </div>
        </div>
        @yield('content')
    </main>
</body>

<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>
<script src="/js/jquery.pjax.js"></script>
</html>
