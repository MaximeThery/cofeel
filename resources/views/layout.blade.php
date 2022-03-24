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
            <div><img src="{{ asset('house.png') }}"  class="img__nav" alt="Home icon"><a href="/">Home</a></div>
            <div> <img src="{{ asset('profil.png') }}" class="img__nav" alt="Profil icon"><a href="/about">Profil</a></div>
            <div><img src="{{ asset('logout.png') }}" class="img__nav" alt="Logout icon"><a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a></div>
           
            </center>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
        <a href="/login">login</a>
        <a href="/register">register</a>

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
