@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tổng số sách</h5>
                    <p class="card-text">{{ $totalBooks }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3>Tổng số sách theo danh mục</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Danh mục</th>
                        <th>Số lượng sách</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($booksByCategory as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->books_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
