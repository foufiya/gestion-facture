@extends('layouts.app')

@section('content')
    
  <h1 > Hello from dashboard {{Auth::user()->name}} </h1>


@endsection