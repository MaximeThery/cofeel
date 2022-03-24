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
           <center >Bon retour parmis nous {{Auth::user()->name}} !<br>
           <div class="nav__choices">
            <div><a href="/"><img src="{{ asset('house.png') }}"  class="img__nav" alt="Home icon"></a></div>
            <div> <a href=""><img src="{{ asset('loupe.png') }}" class="img__nav2" alt="search bar icon"></a></div>
            <div> <a href=""><img src="{{ asset('cloche.png') }}" class="img__nav2" alt="Profil icon"></a></div>
            <div> <a href="/about"><img src="{{ asset('aboutnav.png') }}" class="img__nav" alt="Profil icon"></a></div>
           
            </center>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
        <center>
        <div class="nav__choices">
        <a href="/login">login</a>
        <a href="/register">register</a>
        </div>
        </center>
        @endauth

        </div>
    </nav>

    <main id="pjax-container">
        @yield('content')
    </main>

    <footer>Copyright M.T</footer>
</body>

<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>
<script src="/js/jquery.pjax.js"></script>
</html>
