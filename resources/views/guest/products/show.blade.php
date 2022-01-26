@extends('layouts.app')


@section('content')
<div class="container">

    <div class="product d-flex">
        <img src="{{$product->thumb}}" alt="{{$product->name}}">

        <div class="details p-4">
            <h1 class="card-title">{{$product->name}}</h1>
            <p class="card-text">{{$product->price}} $</p>
            <p class="card-text">{{$product->genre}}</p>
        </div>

    </div>


    @auth
    <div class="actions">
        <a href="{{route('products.index')}}">Back to shop</a>
    </div>
    @endauth
</div>
@endsection