@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('titleHeader', 'Étudiants')
@section('content')

        <div class="row">
            <div class="col-4">
                <h5>Ajouter un noveau étudiant</h5>
                <a href="{{ route('etudiants.create')}}" class="btn btn-custom btn-primary btn-sm">Ajouter</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des étudiants</h4>
                        <p>Cliquez sur un étudiant pour l'afficher</p>
                    </div>
                    <div class="card-body">
                @foreach($etudiants as $index => $etudiant)
                    <div class="row mb-0 {{ $index % 2 == 0 ? 'gray-bg' : 'lightgray-bg' }} custom-row">
                        <div class="col-12">
                            <a href="{{ route('etudiants.show', $etudiant->id)}}" class="text-dark no-underline">{{$etudiant->name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
                </div>   
            </div>
        </div>
@endsection