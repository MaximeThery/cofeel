@extends("layout")

@section("content")
<link href="{{ asset('css/newsongs.css') }}" rel="stylesheet">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form method="post" action="/chanson/store" enctype="multipart/form-data">
            @csrf
            <input type="text" required placeholder="Title" name="title" value="" />
            <br />
            <input type="file" required name="song" />
            <br />
            <input type="number" required min="0" max="10" name="note" placeholder="Note" />
            <br />
            <input type="submit" />
        </form> 

@endsection
