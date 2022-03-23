@extends('layout')
@section('content')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
<div class="img__log">
<img src="{{ asset('about.png') }}" alt="">
<h1>{{$user->name}} </h1>

@auth
    @if(Auth::id() != $user->id)
        @if(Auth::user()-> IfollowThem->contains($user->id))
            <a href="/suivre/{{$user->id}}" class="New__song">Suivi</a>
        @else
            <a href="/suivre/{{$user->id}}" class="New__song">Suivre</a>
        @endif
    @endif
@endauth

 @include("firstcontroller._songs", ["songs" => $user->songs])

    
    <audio id="lecteur" controls></audio>
    </div>
@endsection
