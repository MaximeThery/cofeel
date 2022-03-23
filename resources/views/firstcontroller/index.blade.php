@extends('layout')

@section('content')
    @include('firstcontroller._songs', ["songs" => $songs])
    <audio id="lecteur">

    </audio>
    <div>
        <button onclick="document.getElementById('lecteur').play()">Play</button>
        <button onclick="document.getElementById('lecteur').pause()">Pause</button>
        <button onclick="document.getElementById('lecteur').volume += 0.1">Vol +</button>
        <button onclick="document.getElementById('lecteur').volume -= 0.1">Vol -</button>
        <canvas id='progress-bar' style="cursor: pointer; background-color: gray; width : 20rem; height : 2rem">canvas not supported</canvas>
    </div>
@endsection
