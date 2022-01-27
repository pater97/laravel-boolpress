@extends('layouts.app')


@section('content')
<section id="shop_page">
    <div class="container">
        <div class="row g-2">
            
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{$product->thumb}}" alt="{{$product->name}}">
                    <div class="card-body">
                        <h4 class="card-title text-danger">{{strtoupper($product->name)}}</h4>
                        <p class="card-text text-success">{{$product->price}} $</p>
                        <p class="text-muted"><strong>CATEGORIES:</strong> {{$product->genre}}</p>
                        <a href="{{route('products.show', $product->id)}}">View Product</a>
                    </div>
                </div>
            </div>
            @endforeach
    
        </div>
    </div>
</section>

@endsection