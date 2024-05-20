@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Enterprise Details</h2>
                <p><strong>Name:</strong> {{ $entreprise->name }}</p>
                <p><strong>Telephone:</strong> {{ $entreprise->telephone }}</p>
                <p><strong>Email:</strong> {{ $entreprise->email }}</p>
                <p><strong>Address:</strong> {{ $entreprise->address }}</p>
                <a href="{{ route('entreprises.edit', $entreprise->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('entreprises.destroy', $entreprise->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this enterprise?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
