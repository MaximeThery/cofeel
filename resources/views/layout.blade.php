@if(request()->ajax())
    @yield('content')
@else
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
    @include('firstcontroller.song_container')
    <main class="fixe" id="pjax-container">
        @yield('content')
    </main>
</body>

<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>
<script src="/js/jquery.pjax.js"></script>
</html>
@endif
