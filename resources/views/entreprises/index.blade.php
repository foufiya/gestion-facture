@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Enterprises</h2>
                <a href="{{ route('entreprises.create') }}" class="btn btn-primary">Create Enterprise</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($entreprises as $entreprise)
                            <tr>
                                <td>{{ $entreprise->id }}</td>
                                <td>{{ $entreprise->name }}</td>
                                <td>{{ $entreprise->telephone }}</td>
                                <td>{{ $entreprise->email }}</td>
                                <td>{{ $entreprise->address }}</td>
                                <td>
                                    <a href="{{ route('entreprises.show', $entreprise->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('entreprises.edit', $entreprise->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('entreprises.destroy', $entreprise->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this enterprise?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
