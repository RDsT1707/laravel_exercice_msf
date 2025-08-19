@extends('layouts.app')

@section('content')
<h1>Liste des bâtiments</h1>
<ul>
@foreach($batiments as $batiment)
    <li>{{ $batiment->nom }} - {{ $batiment->description }}</li>
@endforeach
</ul>
@endsection
