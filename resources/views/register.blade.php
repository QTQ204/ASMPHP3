@extends('layout')

@section('title', 'Register')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Sign Up</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('postRegister') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" placeholder="Enter your fullname">
                        </div>
                        @error('fullname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter your username">
                        </div>
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Avatar -->
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror">
                        </div>
                        @error('avatar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Confirm your password">
                        </div>
                        @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
                </div>
            </div>
        </div>
    </div>
@endsection
