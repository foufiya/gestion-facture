@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Enterprise</h2>
                <form action="{{ route('entreprises.update', $entreprise->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $entreprise->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Telephone:</label>
                        <input type="text" name="telephone" class="form-control" value="{{ $entreprise->telephone }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ $entreprise->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea name="address" class="form-control" required>{{ $entreprise->address }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
