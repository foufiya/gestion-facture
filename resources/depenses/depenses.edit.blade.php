@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Depense</h2>
                <form action="{{ route('depenses.update', $depense->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Numero:</label>
                        <input type="text" name="numero" class="form-control" value="{{ $depense->numero }}" required>
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" name="date" class="form-control" value="{{ $depense->date }}" required>
                    </div>
                    <div class="form-group">
                        <label>Montant:</label>
                        <input type="text" name="montant" class="form-control" value="{{ $depense->montant }}" required>
                    </div>
                    <div class="form-group">
                        <label>Etat:</label>
                        <input type="text" name="etat" class="form-control" value="{{ $depense->etat }}" required>
                    </div>
                    <div class="form-group">
                        <label>Date Paiement:</label>
                        <input type="date" name="date_paiement" class="form-control" value="{{ $depense->date_paiement }}">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" class="form-control">{{ $depense->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
