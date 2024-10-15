@extends('client.layout')

@section('content')
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('client.changepassword') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="current_password" class="form-label">Mật khẩu hiện tại</label>
        <input type="password" class="form-control" id="current_password" name="current_password" required>
    </div>

    <div class="mb-3">
        <label for="new_password" class="form-label">Mật khẩu mới</label>
        <input type="password" class="form-control" id="new_password" name="new_password" required>
    </div>

    <div class="mb-3">
        <label for="new_password_confirmation" class="form-label">Xác nhận mật khẩu mới</label>
        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
    </div>

    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
</form>

@endsection

<style>
    /* Cấu trúc chung cho form */
    form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Định dạng các input */
    .form-control {
        border-radius: 8px;
        padding: 10px;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }

    /* Cải thiện khoảng cách giữa các phần tử */
    .mb-3 {
        margin-bottom: 1.5rem;
    }

    /* Nút "Đổi mật khẩu" */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 1.2rem;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    /* Hiển thị thông báo lỗi và thành công */
    .alert {
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        font-size: 1rem;
    }

    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }

    /* Cải thiện kiểu chữ cho các label */
    .form-label {
        font-weight: 600;
        color: #333;
    }

    /* Cải thiện padding cho form */
    form {
        padding: 30px;
        background-color: #f9f9f9;
    }
</style>
