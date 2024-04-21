@extends('admin')
@section('content')
    <div class="container">
        <div>
            <h1>сторінка створення постів</h1>
        </div>
        <form action="{{ route('admin.post.store') }}" method="post">
            @csrf
            <div class="from-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror    
            </div>
            <div class="from-group">
                <label for="price">price</label>
                <textarea class="form-control" name="price" id="price" placeholder="price">{{ old('price') }}</textarea>
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror   
            </div>
            <div class="from-group">
                <label for="image">image</label>
                <input type="text" name="image" class="form-control" id="text" placeholder="image" value="{{ old('image') }}">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror   
            </div>
            <div class="from-group mt-4">
                <label for="category">Category</label>    
                <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option 
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                        value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Add</button>
          </form>
    </div>
@endsection

