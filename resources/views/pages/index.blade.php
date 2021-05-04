<h1>Hello Fred</h1>
<h2>updated</h2>
    @foreach ($posts as $post)
        <p>{{$post->title}}</p>
    @endforeach
