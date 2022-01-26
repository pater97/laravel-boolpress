@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row gy-2">
        @foreach($products as $product)

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{$product->thumb}}" alt="{{$product->name}}">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p class="text-muted">{{$product->genre}}</p>
                    <p class="card-text">{{$product->price}}</p>
                    <a href="{{route('products.show', $product->id)}}">View Product</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection