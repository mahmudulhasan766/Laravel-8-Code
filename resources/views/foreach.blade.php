<h2>{{$title}}</h2>

@foreach($posts as $post)
    <h2>{{ $post['title']}}</h2>
    <P>{{ $post['contant']}}</P>
@endforeach