@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header"><h5>My Profile</h5></div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
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

        <form action="{{ route('users.update-profile') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div style="position: relative;">
                    <input type="password" name="password" class="form-control" id="password">
                    <div class="password-icon">
                        <i data-feather="eye" class="eye"></i>
                        <i data-feather="eye-off" class="eye-off"></i>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>

            <button type="submit" class="btn btn-success">Update Profile</button>
        </form>
    </div>
</div>

<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();

    const eye = document.querySelector(".eye");
    const eyeOff = document.querySelector(".eye-off");
    const passwordField = document.getElementById("password");

    eye.addEventListener("click", () => {
        eye.style.display = "none";
        eyeOff.style.display = "block";
        passwordField.type = "text";
    });

    eyeOff.addEventListener("click", () => {
        eyeOff.style.display = "none";
        eye.style.display = "block";
        passwordField.type = "password";
    });
</script>

@endsection
