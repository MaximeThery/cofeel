<ul class="container m-auto">
    @foreach($songs as $s)
        <li>
            <a href="#" class="song" data-file="{{$s['url']}}">{{$s['title']}}</a><br> posté par <a href="/users/{{$s->user->id}}" class="username">{{$s->user->name}} </a>
        </li>
    @endforeach
</ul>
