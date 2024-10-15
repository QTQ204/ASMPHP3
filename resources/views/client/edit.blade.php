@extends('client.layout')

@section('content')
<div class="card-body">
    <h1 class="text-center">Cập nhật user</h1>
    
    @if (session('message'))
        <div class="alert alert-primary">
            {{ session('message') }}
        </div>
    @endif
    
    <form action="{{ route('client.user.update', $user) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Full Name -->
        <input type="hidden" name="id" value="{{$user->id}}">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" name="fullname" id="fullName" class="form-control" placeholder="Enter your fullname" value="{{$user->fullname}}">
        </div>
        @error('fullname')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        
        <!-- Username -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" value="{{$user->username}}">
        </div>
        @error('username')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{$user->email}}">
        </div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        
        <!-- Avatar -->
        <div class="mb-3">
            <label for="avatar" class="form-label">Avata</label>
            <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Enter your avatar">
            @if($user->avatar)
                <div class="mt-2">
                    <img src="{{ asset('storage') . '/' . $user->avatar }}" width="150" alt=" {{ $user->username }}">
                </div>
            @endif
        </div>
        @error('avatar')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        
        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Update user</button>
            <a href="{{ route('client.index') }}" class="btn btn-success btn-lg ms-2">Quay Lại</a>
        </div>
    </form>
</div>
@endsection

<style>
    /* Định dạng cho form */
    .card-body {
        padding: 30px;
        max-width: 600px;
        margin: 0 auto;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Tiêu đề form */
    h1 {
        font-size: 2rem;
        color: #007bff;
        font-weight: 600;
    }

    /* Tạo khoảng cách giữa các input */
    .mb-3 {
        margin-bottom: 1.5rem;
    }

    /* Input text */
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

    /* Nút submit */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    /* Cải thiện việc hiển thị lỗi */
    .text-danger {
        font-size: 0.9rem;
        color: #e74c3c;
    }

    /* Avatar */
    .mt-2 img {
        border-radius: 10px;
        border: 2px solid #ddd;
    }

    /* Cải thiện khoảng cách */
    .mt-4 {
        margin-top: 2rem;
    }
</style>


