@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Facture Details</h2>
                <p><strong>Title:</strong> {{ $facture->title }}</p>
                <p><strong>Date:</strong> {{ $facture->date }}</p>
                <p><strong>Amount:</strong> {{ $facture->amount }}</p>
                <p><strong>VAT:</strong> {{ $facture->vat }}</p>
                <p><strong>Description:</strong> {{ $facture->description }}</p>
                <a href="{{ route('factures.edit', $facture->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('factures.destroy', $facture->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this facture?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
