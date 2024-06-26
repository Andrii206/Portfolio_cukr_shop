@extends('layout.admin')

@section('content')
<div>
    <div>
        <a href="{{route('post.create')}}">Create post</a>
    </div>
    @foreach ($posts as $post)
        <h1>{{ $post -> title }}</h1>
        <p>{{ $post -> content }}</p>
        <span>{{ $post -> likes }}</span>
    @endforeach
    <div>
        {{ $posts->withQueryString()-> links() }}
    </div>
</div>
@endsection