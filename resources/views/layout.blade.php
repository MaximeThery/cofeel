<html>
<head>
    <title>Website</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About me</a>
        @auth
            Bonjour {{Auth::user()->name}}
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="/nouvelle/chanson">New song</a>
        @else
        <a href="/login">login</a>
        <a href="/register">register</a>

        @endauth


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
