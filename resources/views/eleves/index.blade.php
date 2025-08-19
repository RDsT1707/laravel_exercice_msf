@extends('layouts.app')

@section('content')
<h1>Liste des élèves</h1>
<ul>
@foreach($eleves as $eleve)
    <li>{{ $eleve->prenom }} {{ $eleve->nom }} - Age: {{ $eleve->age }} - {{ $eleve->etat ? 'Demandeur' : 'Non demandeur' }}</li>
@endforeach
</ul>
@endsection
