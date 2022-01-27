@extends('layouts.admin')


@section('content')

<h1>Update the product</h1>

@include('partials.errors')

<form action="{{route('admin.products.update',$product->id)}}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Lenovo Laptop" aria-describedby="nameHelper" value="{{$product->name}}">
        <small id="nameHelper" class="text-muted">Type a name for your product</small>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">thumb</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://" aria-describedby="thumbHelper" value="{{$product->thumb}}">
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="$" aria-describedby="priceHelper" value="{{$product->price}}">
        <small id=" priceHelper" class="text-muted">Type a price for your product</small>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">genre</label>
        <input type="text" name="genre" id="genre" class="form-control" placeholder="electrodomestic/lifestyle ecc." aria-describedby="genreHelper" value="{{$product->genre}}">
        <small id=" genreHelper" class="text-muted">Type a genre for your product</small>
        @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-dark">Save</button>
</form>
@endsection