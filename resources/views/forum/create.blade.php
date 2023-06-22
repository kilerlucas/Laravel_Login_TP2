@extends('layouts.app')
@section('title', 'Ajouter un article')
@section('titleHeader', 'Ajouter un article')
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <label for="title_fr">Titre Français</label>
                        <input type="text" id="title_fr" name="title_fr" 
                        class="form-control">
                        <br>
                        <label for="title_en">English Title </label>
                        <input type="text" id="title_en" name="title_en" 
                        class="form-control">
                        <br>
                        <label for="article_fr">Article Français</label>
                        <textarea name="body_fr" id="article_fr"class="form-control"></textarea>
                        <br>
                        <label for="article_en">English Article</label>
                        <textarea name="body_en" id="article_en"class="form-control"></textarea>
                        <br>
                        <label for="category">Categories</label>
                        <select name="category_id" id="category" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection