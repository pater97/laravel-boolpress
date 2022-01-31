@extends('layouts.admin')


@section('content')

<h1>modifca categoria</h1>

@include('partials.errors')

<form action="{{route('admin.categories.update',$category->id)}}" method="post">
    @csrf
    
    @method('PATCH')

    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="new category" aria-describedby="nameHelper" value="{{$category->name}}">
        <small id="nameHelper" class="text-muted">Type a name for your category</small>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="my5">
        modifica
    </button>

@endsection