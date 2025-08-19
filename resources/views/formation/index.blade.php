@extends('layouts.app')

@section('content')
<h1>Liste des formations</h1>
<ul>
@foreach($formations as $formation)
    <li>{{ $formation->nom }} - {{ $formation->description }}</li>
@endforeach
</ul>
@endsection
