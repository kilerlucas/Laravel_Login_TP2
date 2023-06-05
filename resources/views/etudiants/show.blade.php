

@extends('layouts.app')

@section('title', 'Détails de l\'étudiant')
@section('titleHeader', 'Détails de l\'étudiant')

@section('content')
<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
    <a href="{{route('etudiants.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $etudiants->nom }}</h5>
                <p class="card-text"><strong>Adresse :</strong> {{ $etudiants->adresse }}</p>
                <p class="card-text"><strong>Ville :</strong> {{ $etudiants->etudiantHasVille->nom }}</p>
                <p class="card-text"><strong>Téléphone :</strong> {{ $etudiants->phone }}</p>
                <p class="card-text"><strong>E-mail :</strong> {{ $etudiants->email }}</p>
                <p class="card-text"><strong>Date de naissance :</strong> {{ $etudiants->date_de_naissance }}</p>
                <a href="{{ route('etudiants.edit', $etudiants->id) }}" class="btn btn-outline-primary">Modifier</a>
                <form action="{{ route('etudiants.destroy', $etudiants->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment supprimer les données de {{$etudiants->nom}} ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <form method="post" action="{{route('etudiants.destroy', $etudiants->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
