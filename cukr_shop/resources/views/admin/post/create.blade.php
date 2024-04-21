@extends('admin')
@section('content')
    <div class="container">
        <div>
            <h1>сторінка створення постів</h1>
        </div>
        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
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
            {{-- <div class="from-group">
                <label for="image">image</label>
                <input type="text" name="image" class="form-control" id="text" placeholder="image" value="{{ old('image') }}">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror   
            </div> --}}
            <div class="form-group">
                <label for="exampleInputFile">Вставити фото</label>
                    <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label">Оберіть фото</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Встановить</span>
                    </div>
                </div>
            </div>
            <div class="from-group mt-4">
                <label for="category">Категорія</label>    
                <select class="form-select" aria-label="Default select example" id="category" name="category">
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

