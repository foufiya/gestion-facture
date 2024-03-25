@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Depense Details</h2>
                <p><strong>Numero:</strong> {{ $depense->numero }}</p>
                <p><strong>Date:</strong> {{ $depense->date }}</p>
                <p><strong>Montant:</strong> {{ $depense->montant }}</p>
                <p><strong>Etat:</strong> {{ $depense->etat }}</p>
                <p><strong>Date Paiement:</strong> {{ $depense->date_paiement }}</p>
                <p><strong>Description:</strong> {{ $depense->description }}</p>
                <a href
