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
                <a href="{{route('admin.products.edit',$product->id)}}"><i class="fas fa-pencil-alt fa-lg fa-fw"></i></a>
                <!-- bottone modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$product->id}}">
                    <i class="fas fa-trash"></i>
                </button>

        <!-- Modal -->
                <div class="modal fade" id="delete{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$product->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete product {{$product->name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    ⚡ Attenzione questa operazione non puo essere annullata!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('admin.products.destroy', $product->id)}}" method="product">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection