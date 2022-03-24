@extends('layout')

@section('content')
    @include('firstcontroller._songs', ["songs" => $songs])
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
@endsection
