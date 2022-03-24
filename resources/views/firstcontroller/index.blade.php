@extends('layout')

@section('content')
    <h1>Mon application</h1>
    <p>Hello World</p>



    @include('firstcontroller._songs', ["songs" => $songs])
    <audio id="lecteur">

    </audio>
    <div class="lecteur_perso absolute bottom-0 left-0 right-0 h-1/4">

        <div class="time">
            <span class="start"></span>
            <button id="button_play" class="play"></button>
            <span class="end"></span>
        </div>
        <div class="progress">
            <div class="progress-bar">
                <div class="now"></div>
            </div>
        </div>
    </div>
@endsection
