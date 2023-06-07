@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title)}}">
    </div>

    <div class="mb-3">
        <label for="type">Select Type</label>
        <select class="form-select" id="type" name="type_id">
            <option selected value=""></option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}"  @selected($type->id == old('type_id', $project->type?->id))>{{ $type->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">content</label>
        <textarea class="form-control"  id="description" name='description' rows="3">{{old('description', $project->description)}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">invia</button>
</form>
@endsection