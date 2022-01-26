@extends('layouts.app')

@section('content')

<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3 text-center">Welcome</h1>
        <p class="lead text-center">Lo shop numero 1 è a tua disposizione</p>
        <hr class="my-2">
        <p class="lead d-flex justify-content-center">
            <a class="btn btn-primary btn-lg " href="{{route('products.index')}}" role="button">Vai allo shop</a>
        </p>
    </div>
</div>

@endsection