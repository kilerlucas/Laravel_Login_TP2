@extends('layouts.app')

@section('title', 'Liste des étudiants')
@section('titleHeader', 'Étudiants')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <p>Cliquez sur un étudiant pour l'afficher</p>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Ajouter un nouvel étudiant</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Liste des étudiants</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($etudiants as $etudiant)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $etudiant->nom }}</h5>
                                    <p class="card-text"><strong>Adresse :</strong> {{ $etudiant->adresse }}</p>
                                    <p class="card-text"><strong>Ville :</strong> {{ $etudiant->etudiantHasVille->nom }}</p>
                                    <p class="card-text"><strong>Téléphone :</strong> {{ $etudiant->phone }}</p>
                                    <p class="card-text"><strong>E-mail :</strong> {{ $etudiant->email }}</p>
                                    <p class="card-text"><strong>Date de naissance :</strong> {{ $etudiant->date_de_naissance }}</p>
                                    <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-primary">Détails</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
