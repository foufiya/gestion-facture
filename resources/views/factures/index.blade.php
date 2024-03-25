@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Factures</h2>
                <a href="{{ route('factures.create') }}" class="btn btn-primary">Create Facture</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>VAT</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($factures as $facture)
                            <tr>
                                <td>{{ $facture->id }}</td>
                                <td>{{ $facture->title }}</td>
                                <td>{{ $facture->date }}</td>
                                <td>{{ $facture->amount }}</td>
                                <td>{{ $facture->vat }}</td>
                                <td>{{ $facture->description }}</td>
                                <td>
                                    <a href="{{ route('factures.show', $facture->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('factures.edit', $facture->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('factures.destroy', $facture->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this facture?')">Delete</button>
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
