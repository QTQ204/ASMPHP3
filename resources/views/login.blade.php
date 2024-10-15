@extends('layout')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center bg-primary text-white">
                    <h3>Login</h3>
                </div>
                <br>
                @if (session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                @endif
                @if (session('messageerr'))
                <div class="alert alert-danger">
                    {{ session('messageerr') }}
                </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('postLogin') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Enter your password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>Don't have an account? <a href="{{ route('register') }}">Sign up</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
