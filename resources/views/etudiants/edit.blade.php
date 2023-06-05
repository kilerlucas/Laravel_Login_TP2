@extends('layouts.app')

@section('title', 'Modifier un étudiant')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Formulaire de modification</div>

                <div class="card-body">
                    <form method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{$etudiant->nom}}">
                        </div>

                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control" value="{{$etudiant->adresse}}">
                        </div>

                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <select name="ville_id" id="ville" class="form-control">
                                @foreach($villes as $ville)
                                <option value="{{ $ville->id }}" {{ $ville->id == $etudiant->ville_id ? 'selected' : '' }}>{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{$etudiant->phone}}">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{$etudiant->email}}">
                        </div>

                        <div class="form-group">
                            <label for="date-de-naissance">Date de naissance</label>
                            <input type="date" id="date-de-naissance" name="date_de_naissance" class="form-control" value="{{$etudiant->date_de_naissance}}">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
