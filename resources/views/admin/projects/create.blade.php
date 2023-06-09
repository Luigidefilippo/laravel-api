@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
        @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div>

        @enderror
    </div>

    <div>
        <h5>Seleziona le tecnologie</h5>
        @foreach ($technologys as $technology)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="technologys[]" value="{{$technology->id}}" id="technology-{{$technology->id}}" @checked(in_array($technology->id , old('technologys' , [])))>
                <label for="technology-{{$technology->id}}" class="form-check-label">{{$technology->name}}</label>
            </div>
        @endforeach
    </div>

     <div class="mb-3">
            <label for="type">Select Type</label>
            <select class="form-select" id="type" name="type_id">
                <option selected value=""></option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @selected(old('type_id') == $type->id)>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" value="{{old('description')}}" id="description" name='description' rows="3" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">invia</button>
</form>

@endsection