@extends('admin.layout')
@section('title')
    Admin
@endsection
@section('content')
    <div class="w-full">
        <h1 class="w-full bg-primary text-white p-3 rounded">User</h1> <!-- Thay đổi màu nền và màu chữ của tiêu đề -->
        <div class="m-5">
            <form action="{{ route('admin.users.search') }}" method="GET" class="form-inline">
                <input type="text" name="query" placeholder="Tìm kiếm người...">
                <button type="submit">Tìm kiếm</button>
            </form>
        <div></div>            
        @if (session('message'))
            <div class="alert alert-success"> <!-- Sử dụng alert-success cho thông báo thành công -->
                {{ session('message') }}
            </div>
        @endif

        @if (session('messagee'))
            <div class="alert alert-danger"> <!-- Sử dụng alert-danger cho thông báo lỗi -->
                {{ session('messagee') }}
            </div>
        @endif

        <table class="table table-striped table-bordered table-hover"> <!-- Thêm table-striped, table-bordered -->
            <thead class="table-dark"> <!-- Thay đổi màu nền phần tiêu đề -->
                <tr>
                    <th>#ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Avatar</th>
                    <th>Role</th>
                    <th>Active</th>
                    <th>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                          <img src="{{ asset('storage/' . $user->avatar) }}" alt="Thumbnail"> <!-- Thêm class img-thumbnail -->
                        </td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->active ? 'Yes' : 'No' }}</td>
                        <td>
                            <div class="d-flex"> <!-- Thêm d-flex để các nút nằm ngang -->
                                <a href="{{route('admin.users.edit', $user)}}" class="btn btn-primary mx-1">Edit</a>

                                @if (Auth::user()->id != $user->id)
                                <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Bạn có muốn xóa không')"
                                        class="btn btn-danger">Delete</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="pagination justify-content-center">
            {{ $users->links() }}
        </div>
    </div>
@endsection

<style>
    /* Tùy chỉnh lại bảng */
table {
    margin-top: 20px;
    border-collapse: separate; /* Thêm khoảng cách giữa các ô */
    border-spacing: 0 10px; /* Khoảng cách giữa các hàng */
}

table th, table td {
    text-align: center;
    vertical-align: middle;
    padding: 10px;
}

table th {
    background-color: #343a40; /* Đổi màu nền tiêu đề */
    color: #fff; /* Màu chữ tiêu đề */
    font-weight: bold;
}

table td img {
    width: 50px; /* Điều chỉnh kích thước ảnh đại diện */
    height: 50px;
    border-radius: 50%;
}

/* Hiệu ứng hover cho hàng trong bảng */
table tbody tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

/* Tùy chỉnh màu nút */
.btn-success {
    background-color: #28a745;
    border-color: #28a745;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

/* Hiệu ứng hover cho nút */
.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

/* Tùy chỉnh phân trang */
.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
}

.pagination .page-link {
    color: #007bff;
}

.pagination .page-link:hover {
    background-color: #f1f1f1;
}

/* Chỉnh sửa form tìm kiếm */
form input[type="text"] {
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-right: 10px;
    width: 300px; /* Điều chỉnh kích thước ô tìm kiếm */
}

form button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

</style>
