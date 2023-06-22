@extends('layouts.app')
@section('title', 'Modifier un article')
@section('titleHeader', 'Modifier un article')
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <label for="title_fr">Titre Français</label>
                        <input type="text" id="title_fr" name="title_fr" 
                        class="form-control" value="{{$forumPost->title_fr}}">

                        <label for="title_en">English Title</label>
                        <input type="text" id="title_en" name="title_en" 
                        class="form-control" value="{{$forumPost->title_en}}">

                        <label for="article_fr">Article Français</label>
                        <textarea name="body_fr" id="article_fr"class="form-control">{{$forumPost->body_fr}}</textarea>

                        <label for="article_en">English Article</label>
                        <textarea name="body_en" id="article_en"class="form-control">{{$forumPost->body_en}}</textarea>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection