@extends('layouts.admin')


@section('content')
<div class="d-flex justify-content-end flex-column">
    <h1>Products</h1>
    <a name="" id="" class="btn btn-dark" href="{{route('admin.products.create')}}" role="button">Create Product</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>thumb</th>
            <th>Price</th>
            <th>genre</th>
            <th>avalabile</th>

        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td scope="row">{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td><img width="100" src="{{$product->thumb}}" alt=""></td>
            <td>{{$product->price}}$</td>
            <td>{{$product->genre}}</td>
            <td>{{$product->avalabile}}</td>
            <td>
                <a href="{{route('products.show', $product->id )}}"><i class="fas fa-eye fa-lg fa-fw"></i></a>
                <i class="fas fa-pencil-alt fa-lg fa-fw"></i>
                <i class="fas fa-trash fa-lg fa-fw"></i>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection