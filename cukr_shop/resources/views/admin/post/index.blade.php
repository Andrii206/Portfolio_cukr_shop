@extends('admin')

@section('content')
<div>
    {{-- <div>
        <a href="{{route('post.create')}}">Create post</a>
    </div> --}}
    @foreach ($posts as $post)
        <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ url('storage/' . $post -> image) }}" class="img-fluid rounded-start" alt="..." >
            </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title mb-2">{{ $post -> title }}</h5>
                        <p class="card-text">{{ $post -> price }}</p>
                        <p class="card-text"><small class="text-body-secondary">{{ $post -> category ->title }}</small></p>
                        <div class="row my-3">
                            <div class="lg-6 justify-content-center mx-3">
                                <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary" role="button">Edit</a>
                            </div>
                            <div class="lg-6 justify-content-center mx-3">
                                <form action="{{ route('admin.post.delete', $post->id) }}" method="post" >
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach
    <div>
        {{ $posts->withQueryString()-> links() }}
    </div>
</div>
@endsection