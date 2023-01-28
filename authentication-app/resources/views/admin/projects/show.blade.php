@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2><a href="{{route('admin.projects.index')}}">Torna alla lista</a></h2>
        <h1>{{$project->name}}</h1>
        <img src="{{$project->cover_image}}" alt="{{$project->name}}" width="100px">
    </div>
@endsection