@extends('layouts.app')

@section('title', 'Ajouter un étudiant')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{route('etudiants.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
            <div class="card">

                <div class="card-header bg-primary text-white">Formulaire</div>

                <div class="card-body">
                    <form method="post">
                        @csrf

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <select name="ville_id" id="ville" class="form-control">
                                @foreach($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="date-de-naissance">Date de naissance</label>
                            <input type="date" id="date-de-naissance" name="date_de_naissance" class="form-control">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
