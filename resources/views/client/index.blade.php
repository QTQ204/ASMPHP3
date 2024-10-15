@extends('client.layout')
@section('content')
<div class="login-box">
    <div class="row justify-content-center" style="min-height: 50vh;">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Tài Khoản Người Dùng</h2>

            <!-- Danh sách các mục tài khoản người dùng -->
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#" class="text-decoration-none">
                        <i class="bi bi-bag"></i> Đơn hàng của bạn
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{route('client.user.edit', $user)}}" class="text-decoration-none">
                        <i class="bi bi-pencil"></i> Cập nhật tài khoản
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{route('client.showpassword', $user)}}" class="text-decoration-none">
                        <i class="bi bi-lock"></i> Đổi mật khẩu
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="text-decoration-none text-danger">
                        <i class="bi bi-box-arrow-right"></i> Thoát
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

<style>
    /* Căn giữa nội dung */
    .login-box {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        margin-bottom: 50px;
    }

    /* Tạo khoảng cách cho các danh mục */
    .list-group-item {
        border: none;
        border-radius: 10px;
        margin-bottom: 10px;
        padding: 15px;
        background-color: #f9f9f9;
        transition: background-color 0.3s ease;
    }

    /* Hiệu ứng hover khi di chuột vào danh mục */
    .list-group-item:hover {
        background-color: #e9ecef;
        cursor: pointer;
    }

    /* Màu sắc cho các icon */
    .list-group-item i {
        margin-right: 10px;
        color: #007bff;
    }

    /* Màu sắc của liên kết */
    .list-group-item a {
        color: #333;
        font-weight: bold;
        text-transform: uppercase;
        transition: color 0.3s ease;
    }

    /* Màu sắc khi hover vào liên kết */
    .list-group-item a:hover {
        color: #007bff;
    }

    /* Màu cho mục "Thoát" */
    .list-group-item.text-danger a {
        color: #dc3545;
    }

    /* Tạo thêm hiệu ứng cho mục "Thoát" khi hover */
    .list-group-item.text-danger a:hover {
        color: #c82333;
    }

    /* Tiêu đề phần tài khoản */
    h2 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #007bff;
        text-transform: uppercase;
    }

    /* Tạo khoảng cách cho các mục */
    .list-group {
        margin-top: 20px;
    }
</style>
