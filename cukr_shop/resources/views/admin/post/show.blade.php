@extends('admin')
@section('content')
    <div>
        <div>
            <h1>сторінка постів</h1>
        </div>
            <h3>{{ $post -> title }}</h3>
            <p>{{ $post -> price }}</p>
            <span>{{ $post -> category -> id }}</span>
    </div>
    <div>
        <a href="{{ route('admin.post.edit', $post->id) }}">Редагувати</a>
    </div>
    <div>
        <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
    </div>
    <div>
        <a href="{{route('admin.post.index')}}">Back</a>
    </div>
@endsection

