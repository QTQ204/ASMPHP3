@extends('admin.layout')

@section('title', 'Thêm Phim')

@section('content')
<h1>Thêm mới Sách</h1>
    
    <form action="{{ route('admin.books.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" id="" name="title" placeholder="Title" required>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail" id="">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" class="form-control" id="" name="author" required>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="" name="publisher" placeholder="Publisher" required>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="Publication" class="form-control" id="" required>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" class="form-control" name="Price" id="" required>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="number" name="Quantity" class="form-control" id="" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Danh Mục</label>
            <select name="Category_id" id="" class="form-control">
                @foreach ($genes as $cate)
                    <option value="{{ $cate->id }}">
                        {{ $cate->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>
    </form>
@endsection
