<ul>
@foreach ($posts as $post)
    <li>{{ $post->id }}</li>
    <li>{{ $post->title }}</li>
    <li>{{ $post->body }}</li>
@endforeach
</ul>