@extends('admin.layout')

@section('title', 'Danh sách sách')

@section('content')
    <h1>Danh Sách Sách</h1>

    <h2>Kết quả tìm kiếm cho: "{{ $query }}"</h2>

    @if ($moives->isEmpty())
        <p>Không tìm thấy người dùng nào.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Publication</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category Name</th>
                    <th>
                        <a href="{{ route('admin.books.create') }}" class="btn btn-primary">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($moives as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail">
                            <!-- Thêm class img-thumbnail -->
                        </td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->publisher }}</td>
                        <td>{{ $post->Publication }}</td>
                        <td>{{ $post->Price }}</td>
                        <td>{{ $post->Quantity }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class="d-flex">
                            <a href="{{ route('admin.books.edit', $post->id) }}" class="btn btn-primary mx-1">Edit</a>

                            <form action="{{ route('admin.books.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn xóa không?')">Delete</button>
                            </form>

                            <a href="{{ route('admin.books.detail', $post->id) }}" class="btn btn-primary mx-1">Chi
                                tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $moives->links() }} <!-- Phân trang -->
        </div>
    @endif    
    @endsection
