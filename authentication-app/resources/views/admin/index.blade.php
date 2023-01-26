@extends('layouts.admin')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Contenuto</th>
        <th scope="col">Slug</th>
        <th scope="col">Creato il</th>
        <th scope="col">Privato</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
          <th scope="row">{{ $project->name }}</th>
          <td>{{ $project->content }}</td>
          <td>{{ $project->slug }}</td>
          <td>{{ $project->created_on }}</td>
          <td>{{ $project->private }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>