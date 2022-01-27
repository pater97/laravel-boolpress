@extends('layouts.app')


@section('content')

<section id="show_product">
    <div class="container">
    
        <div class="product d-flex">
            <img src="{{$product->thumb}}" alt="{{$product->name}}">
    
            <div class="details p-4">
                <h1 class="card-title text-danger">{{strtoupper($product->name)}}</h1>
                <p class="card-text text-success">{{$product->price}} $</p>
                <p class="card-text text-muted">{{$product->genre}}</p>
            </div>
    
        </div>
    
    
        @auth
        <div class="actions my-5 d-flex justify-content-center">
            <button class="btn btn-success">
                <a class="text-white" href="{{route('products.index')}}">Back to shop</a>
            </button>
        </div>
        @endauth
    </div>
</section>
@endsection