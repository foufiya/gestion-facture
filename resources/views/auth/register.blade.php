@extends('layouts.app')
<html>
    <div class="body">
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4><strong>{{ __('Register') }}</strong></h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<style>
    .body {
        background-color: #ebb3e5;
    font-family: cursive;
    }
    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
    margin:0px 20px 10px 20px;
}
.card {
    width: 600px;
    padding: 10px;
    max-width: 900px;
    border-radius: 40px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #f8f8f8;
}

.row {
    margin-left: 20px;
}
/* Responsive adjustments */
@media (max-width: 576px) {
    .form-group label {
        text-align: left;
    }
}

</style>
<!--<style>
    html{
        background-color: #ebb3e5;
        font-family: cursive;
    
    }
    body {
        
    }

    .container {
        margin-top: 50px;
    }
    
    .card {
        border: none;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
        position: center;
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }
    
    .card-body {
        padding: 20px;
    }
    
    .form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
    }
    
    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        color: #fff;
    }
    
    .btn-primary:hover {
        background-color: #0056b3;
    }
    
    /* Responsive adjustments */
    @media (max-width: 576px) {
        .col-md-4, .col-md-6 {
            text-align: center;
        }
    }
    
</style>-->
</html>