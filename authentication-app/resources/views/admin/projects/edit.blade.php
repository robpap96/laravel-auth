@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Modifica: {{$project->name}}</h1>

    <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome*</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" maxlength="100" value="{{ old('name') }}" >
            @error('name')
                <div class="alert alert-danger">
                    {{$message}}
                <div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto*</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{old('content')}}
            @error('content')
                <div class="alert alert-danger">
                    {{$message}}
                <div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug*</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" maxlength="200" value="{{old('slug')}}">
            @error('slug')
                <div class="alert alert-danger">
                    {{$message}}
                <div>
            @enderror
        </div> 
        <div class="form-group mb-3">
            <label class="active" for="created_on">Creato il*</label>
            <input type="date" class="@error('created_on') is-invalid @enderror" id="created_on" name="created_on" value="{{old('created_on')}}">
            @error('created_on')
                <div class="alert alert-danger">
                    {{$message}}
                <div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="private" class="form-label">Privato(si/no)*</label>
            <input type="text" class="form-control @error('private') is-invalid @enderror" id="private" name="private" maxlength="200" value="{{old('private')}}">
            @error('private')
                <div class="alert alert-danger">
                    {{$message}}
                <div>
            @enderror
        </div> 

        <button type="submit" class="btn btn-success">Accetta Modifiche</button>


    </form>
</div>
@endsection