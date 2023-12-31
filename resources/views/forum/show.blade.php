@extends('layouts.app')
@section('title', 'Article')
@section('titleHeader', 'Article')
@section('content')
        <div class="row mt-5">
            <div class="col-12">
                <a href="{{route('forum.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
                <hr>
                <h2 class='display-6 mt-5' >
                    {{$forumPost->title}}
                </h2>
                <p>
                    {!! $forumPost->body !!}
                </p>
                <p><strong>Author :</strong> {{ $forumPost->user_id }}</p>
                <p><strong>Author :</strong> {{ $forumPost->forumHasUser->name }}</p>  
                <p><strong>Category :</strong> {{ $forumPost->forumHasCategory?->category }}</p>   
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-4">
             
                <a href="{{route('forum.edit', $forumPost->id)}}" class="btn btn-success">Modifier</a>
      
            </div>
            <div class="col-4">
            
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">
                    Effacer
                </button>
        
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Voulez vous vraimente effacer la donnee : {{ $forumPost->id }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Effacer" class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection