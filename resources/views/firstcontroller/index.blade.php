@extends('layout')

@section('content')
    <h1>Mon application</h1>
    <p>Hello World</p>

    <audio id="lecteur" controls>

    </audio>
    @include('firstcontroller._songs', ["songs" => $songs])

@endsection
