@extends('admin')
@section('content')
    <div>
        <div>
            <h1>сторінка постів</h1>
        </div>
            <h3>{{ $post -> title }}</h3>
            <p>{{ $post -> content }}</p>
            <span>{{ $post -> likes }}</span>
    </div>
    <div>
        <a href="{{ route('post.edit', $post->id) }}">Редагувати</a>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
    </div>
    <div>
        <a href="{{route('post.index')}}">Back</a>
    </div>
@endsection

