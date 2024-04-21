@extends('admin')
@section('content')
    <div class="container">
        <div>
            <h1>сторінка створення постів</h1>
        </div>
        <form action="{{ route('post.update', $post->id ) }}" method="post">
            @csrf
            @method('patch') 
            <div class="from-group">
              <label for="title">title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
            </div>
            <div class="from-group">
                <label for="content">content</label>
                <textarea class="form-control" name="content" id="content" placeholder="content" >{{$post->content}}</textarea>
            </div>
            <div class="from-group">
                <label for="image">image</label>
                <input type="text" name="image" class="form-control" id="text" placeholder="image" value="{{$post->image}}">
            </div>
            <div class="from-group mt-4">
                <label for="category">Категорія</label>
                <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option  {{ optional($post->category)->id === $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <label for="tags">Tags</label>
                <select class="form-select" multiple aria-label="Multiple select example" name="tags[]">                
                    @foreach($tags as $tag)
                        <option  
                        @foreach($post->tags as $postTag)
                        {{$tag -> id === $postTag-> id ? 'selected' : ''}} 
                        @endforeach
                        value="{{$tag->id}}">{{$tag->title}}</option>                    
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Update</button>
          </form>
    </div>
@endsection

