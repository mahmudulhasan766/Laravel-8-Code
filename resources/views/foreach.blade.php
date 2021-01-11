<h2>{{$title}}</h2>

@foreach($posts as $post)
    {{$loop->parent}}
    {{$loop->depth}}
    {{$loop->last}}<br>
    {{$loop->first}}
    {{$loop->count}}
    {{$loop->remaining}}
    {{$loop->iteration}}
    <h2>{{$loop->index}} {{ $post['title']}}{{ ' even:'.$loop->even}} {{ ' add:'.$loop->odd}}</h2>
    <P>{{ $post['contant']}}</P>
@endforeach