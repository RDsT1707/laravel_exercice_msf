@extends('layouts.app')

@section('content')
<h1>Liste des types de formations</h1>
<ul>
@foreach($typeformations as $type)
    <li>{{ $type->nom }}</li>
@endforeach
</ul>
@endsection
