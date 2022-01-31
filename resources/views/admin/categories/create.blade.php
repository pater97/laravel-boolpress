@extends('layouts.admin')


@section('content')

<h1>Create a new post</h1>

@include('partials.errors')

<form action="{{route('admin.categories.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="new category" aria-describedby="nameHelper" value="">
        <small id="nameHelper" class="text-muted">Type a name for your category</small>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="my5">
        crea
    </button>

@endsection
