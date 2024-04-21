@extends('layout.main')
@section('content')
    <div>
        <div>
            <h1>сторінка постів</h1>
        </div>

        @foreach ($posts as $post)
            <a href="{{ route('post.show', $post->id)}}"><h3>{{ $post -> title }}</h3></a>
            <p>{{ $post -> content }}</p>
            <span>{{ $post -> likes }}</span>
        @endforeach
        <div>
            {{ $posts->withQueryString()-> links() }}
        </div>
    </div>
@endsection

