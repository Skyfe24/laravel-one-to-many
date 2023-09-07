@extends('layouts.app')

@section('title', 'Modifica Progetto')

@section('content')

@if ( Route::is('projects.create') )
<form action="{{ route('projects.store', $project) }}" method="POST" enctype="multipart/form-data">
@else
<form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@endif
  
    @csrf
   
    <div class="row mt-3">
      <div class="col-6">
        <div class="mb-3">
          <label for="name" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="name" value="{{ old('name', $project->name) }}"
            name="name">
        </div>
      </div>
      <div class="col-5">
        <div class="mb-3">
          <label for="image-file" class="form-label">Aggiungi lo screenshot del progetto</label>
          <input type="file" class="form-control" id="image-file" name="image">
        </div>
      </div>
      
      <div class="col-12">
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" id="description" rows="10" name="description">{{ old('description', $project->description) }}</textarea>
        </div>
      </div>

      <div class="col-12">
        <div class="mb-3">
          <label for="description" class="form-label">link</label>
          <textarea class="form-control" id="link" rows="10" name="link">{{ old('link', $project->link) }}</textarea>
        </div>
      </div>

      <div class="col-12 d-flex justify-content-between">
        <a class="btn btn-dark" href="{{ route('projects.index') }}">Torna indietro</a>
        <button class="btn btn-success">Salva</button>
      </div>
    </div>
  </form>
@endsection