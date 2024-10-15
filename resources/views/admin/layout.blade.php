<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap 5.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #004080; /* Màu xanh đậm cho sidebar */
            padding: 20px;
            transition: all 0.3s ease-in-out;
        }

        .sidebar h4 {
            color: #ffffff;
            margin-bottom: 30px;
        }

        .sidebar a {
            color: #ffffff;
            margin: 10px 0;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        .sidebar a:hover {
            background-color: #1a73e8; /* Màu xanh sáng khi hover */
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
            transition: all 0.3s ease-in-out;
            background-color: #f4f6f9; /* Nền sáng cho nội dung chính */
            overflow: auto;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .main-content {
                margin-left: 200px;
                width: calc(100% - 200px);
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 100%;
                position: relative;
            }
            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white">Admin Panel</h4>
        <a href="{{ route('admin.users.home') }}">Dashboard</a>
        <a href="{{ route('admin.users.index') }}">Users</a>
        <a href="{{ route('admin.books.index')}}">Books</a>
        <a href="{{ route('admin.categories.index')}}">Category</a>
        {{-- <a href="{{ route('admin.categories.index')}}">Categories</a> --}}
        <a href="{{ route('login') }}">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Bootstrap 5.2 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
