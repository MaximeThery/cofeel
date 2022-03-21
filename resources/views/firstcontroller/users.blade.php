@extends('layout')
@section('content')

<h1>La page de {{$user->name}} </h1>
<audio id="lecteur" controls></audio>

@auth
    @if(Auth::id() != $user->id)
        @if(Auth::user()-> IfollowThem->contains($user->id))
            <a href="/suivre/{{$user->id}}">Suivi</a>
        @else
            <a href="/suivre/{{$user->id}}">Suivre</a>
        @endif
    @endif
@endauth


    @include("firstcontroller._songs", ["songs" => $user->songs])
@endsection
