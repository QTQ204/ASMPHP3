@extends('admin.layout')

@section('title', 'Chi tiết Phim')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Chi Tiết Sách</h2>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $books->id }}</td>
                </tr>
                <tr>
                    <th>Tiêu Đề</th>
                    <td>{{ $books->title }}</td>
                </tr>
                <tr>
                    <th>Ảnh Bìa</th>
                    <td>
                        <img src="{{ asset('storage/' . $books->thumbnail) }}" alt="Thumbnail" class="img-thumbnail">
                    </td>
                </tr>
                <tr>
                    <th>Tác Giả</th>
                    <td>{{ $books->author }}</td>
                </tr>
                <tr>
                    <th>Nhà Xuất Bản</th>
                    <td>{{ $books->publisher }}</td>
                </tr>
                <tr>
                    <th>Ngày Xuất Bản</th>
                    <td>{{ $books->Publication }}</td>
                </tr>
                <tr>
                    <th>Giá</th>
                    <td>{{ number_format($books->Price, 0, ',', '.') }} VNĐ</td>
                </tr>
                <tr>
                    <th>Số Lượng</th>
                    <td>{{ $books->Quantity }}</td>
                </tr>
                <tr>
                    <th>Danh Mục</th>
                    <td>{{ $books->category->name }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
