<ul class="container m-auto">
    @foreach($songs as $s)
        <li>
            <a href="#" class="song" id="song" data-file="{{$s['url']}}" data-titre="{{$s['title']}}" data-artiste="{{$s->user->name}}">{{$s['title']}} </a><br> posté par <a href="/users/{{$s->user->id}}" class="username">{{$s->user->name}} </a>
        </li>
    @endforeach
</ul>
