@extends('layouts.admin')

@section('content')
<h1>Progetti </h1>
<table class="table">
    <a class="btn btn-primary mt-4" href="{{ route('admin.dashboard') }}">Torna Indietro</a>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Identificativo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->slug }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection