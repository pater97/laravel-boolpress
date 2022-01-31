@extends('layouts.admin')

@section('content')
    <h1>
        Alle categories
    </h1>
    <div class="d-flex justify-content-end flex-column">
        <a name="" id="" class="btn btn-dark" href="{{route('admin.categories.create')}}" role="button">Create new categories</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>id</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td scope="row">{{$category->name}}</td>
                <td>{{$category->id}}</td>
                <td>
                    <a href="{{route('categories.posts',$category->slug)}}">view post</a>
                    <a href="{{route('admin.categories.edit',$category->id)}}">edit</a>
                     <!-- bottone modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$category->id}}">
                    <i class="fas fa-trash"></i>
                </button> 

        <!-- Modal -->
                <div class="modal fade" id="delete{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$category->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete category {{$category->title}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    ⚡ Attenzione questa operazione non puo essere annullata!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('admin.categories.destroy', $category->id)}}" method="post">
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