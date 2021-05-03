<h1>Hello Fred</h1>
    @foreach ($posts as $post)
        <p>{{$post->title}}</p>
    @endforeach