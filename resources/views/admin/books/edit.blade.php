@extends('admin.layout')

@section('title', 'Sửa sách')

@section('content')
@if (session('message'))
<div class="alert bg-primary text-white">
    {{ session('message') }}
</div>
@endif
<form action="{{ route('admin.books.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Thêm dòng này để chuyển đổi phương thức POST thành PUT -->

    <!-- Title -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter book title" value="{{ old('title', $post->title) }}">
    </div>
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Thumbnail -->
    <div class="mb-3">
        <label for="thumbnail" class="form-label">Thumbnail</label>
        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail"> <!-- Thêm class img-thumbnail -->
        <input type="file" class="form-control" name="thumbnail" id="thumbnail">
    </div>
    @error('thumbnail')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Author -->
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Enter author" value="{{ old('author', $post->author) }}">
    </div>
    @error('author')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Publisher -->
    <div class="mb-3">
        <label for="publisher" class="form-label">Publisher</label>
        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Enter publisher" value="{{ old('publisher', $post->publisher) }}">
    </div>
    @error('publisher')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Publication Date -->
    <div class="mb-3">
        <label for="publication" class="form-label">Publication Date</label>
        <input type="datetime" class="form-control" id="publication" name="Publication" value="{{ old('Publication', $post->Publication) }}">
    </div>
    @error('Publication')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Price -->
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="Price" placeholder="Enter price" value="{{ old('Price', $post->Price) }}">
    </div>
    @error('Price')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Quantity -->
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="Quantity" placeholder="Enter quantity" value="{{ old('Quantity', $post->Quantity) }}">
    </div>
    @error('Quantity')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Genre -->
    <div class="mb-3">
        <label for="" class="form-label">Danh mục</label>
        <select name="Category_id" id="" class="form-control">
            @foreach ($genes as $cate)
            <option value="{{ $cate->id }}" @if ($cate->id == $post->Category_id) selected @endif>
                {{ $cate->name }}
            </option>
            @endforeach
        </select>
    </div>
    @error('Category_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <!-- Submit Button -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection
