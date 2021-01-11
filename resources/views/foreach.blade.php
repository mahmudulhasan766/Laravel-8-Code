<h2>{{$title}}</h2>

@foreach($posts as $post)
    <!-- {{$loop->parent}} -->
    <!-- {{$loop->depth}} -->
    <!-- {{$loop->last}}<br> -->
    <!-- {{$loop->first}} -->
    <!-- {{$loop->count}} -->
    <!-- {{$loop->remaining}} -->
    <!-- {{$loop->iteration}} -->
    @if($loop->even)
    <h2>{{$loop->index+1}} {{ $post['title']}}</h2>
    <P>{{ $post['contant']}}</P>
    @endif
@endforeach

<x-xyz></x-xyz>

<x-xyz></x-xyz>

<x-xyz></x-xyz>