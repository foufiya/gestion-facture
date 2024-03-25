@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Depenses</h2>
                <a href="{{ route('depenses.create') }}" class="btn btn-primary">Create Depense</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Numero</th>
                            <th>Date</th>
                            <th>Montant</th>
                            <th>Etat</th>
                            <th>Date Paiement</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($depenses as $depense)
                            <tr>
                                <td>{{ $depense->id }}</td>
                                <td>{{ $depense->numero }}</td>
                                <td>{{ $depense->date }}</td>
                                <td>{{ $depense->montant }}</td>
                                <td>{{ $depense->etat }}</td>
                                <td>{{ $depense->date_paiement }}</td>
                                <td>{{ $depense->description }}</td>
                                <td>
                                    <a href="{{ route('depenses.show', $depense->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('depenses.edit', $depense->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('depenses.destroy', $depense->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this depense?')">Delete</button>
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
