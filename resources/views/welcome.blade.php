@extends('layouts.app')

@section('title', config('app.name'))
@section('titleHeader', config('app.name'))

@section('content')
<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center pt-4 pb-4">Bienvenue dans la base de données des étudiants du Collège Maisonneuve</h3>
                <div class="text-center">
                    <a href="{{ route('etudiants.index')}}" class="btn btn-primary btn-sm">Afficher la liste des étudiants</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
