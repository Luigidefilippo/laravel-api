@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title)}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">content</label>
        <textarea class="form-control" value="{{old('description', $project->content)}}" id="description" name='description' rows="3" ></textarea>
    </div>
    <button type="submit" class="btn btn-success">invia</button>
</form>
@endsection