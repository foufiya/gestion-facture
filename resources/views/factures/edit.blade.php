@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Facture</h2>
                <form action="{{ route('factures.update', $facture->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $facture->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" name="date" class="form-control" value="{{ $facture->date }}" required>
                    </div>
                    <div class="form-group">
                        <label>Amount:</label>
                        <input type="text" name="amount" class="form-control" value="{{ $facture->amount }}" required>
                    </div>
                    <div class="form-group">
                        <label>VAT:</label>
                        <input type="text" name="vat" class="form-control" value="{{ $facture->vat }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" class="form-control">{{ $facture->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
