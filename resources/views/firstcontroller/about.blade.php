@extends('layout')

@section('content')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
<div class="img__log">
<img src="{{ asset('about.png') }}" alt="">
<p>
@auth
        {{Auth::user()->name}}
        @else
@endauth
</p>


<a href="/nouvelle/chanson" class="New__song">Add a new song</a>
<h1>Vos favoris du moment : </h1>

<h1>Utilisateurs suivis : </h1>
<h1>Vos musiques :</h1>
    @include("firstcontroller._songs", ["songs" => $user->songs])
<div class="logout">
<img src="{{ asset('logout.png') }}" class="img__logout" alt="Logout icon"><a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
</div>
</div>

@endsection
