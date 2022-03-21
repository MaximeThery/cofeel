<ul>
    @foreach($songs as $s)
        <li>
            <a href="#" class="song" data-file="{{$s['url']}}">{{$s['title']}}</a> posté par <a href="/users/{{$s->user->id}}">{{$s->user->name}} </a>
        </li>
    @endforeach
</ul>
