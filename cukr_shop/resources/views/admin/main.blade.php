@extends('admin')

@section('content')
<div>
    @foreach($usersWithPosts as $userWithPost)
        @foreach($userWithPost->posts as $post)
            @if( $post->pivot->deleted_at == null)
                {{-- {{dump($post->pivot)}} --}}
                <p>{{ $post->title }} -> {{ $userWithPost->name }}</p>
                <div class="lg-6 justify-content-center mx-3">
                    <form action="{{ route('admin.postUser.delete', $post->pivot->id) }}" method="post" >
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Відправлено</button>
                    </form>
                    
                </div>
            @endif
        @endforeach
    @endforeach
    <div class="mt-4 justify-content-center">
        {{    $usersWithPosts->withQueryString()-> links() }}
    </div> 
    </div>
@endsection
