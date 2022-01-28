@extends('layouts.admin')

@section('content')
    
<div class="d-flex justify-content-end flex-column">
    <h1>Products</h1>
    <a name="" id="" class="btn btn-dark" href="{{route('admin.posts.create')}}" role="button">Create Post</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>IMAGE</th>
            <th>SUB TITLE</th>
            <th>DESCRIPTION</th>

        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td scope="row">{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td><img width="100" src="{{$post->image}}" alt=""></td>
            <td>{{$post->sub_title}}</td>
            <td>{{$post->description}}</td>
            <td>
                <a href="{{route('posts.show', $post->id )}}"><i class="fas fa-eye fa-lg fa-fw"></i></a>
                <a href="{{route('admin.posts.edit',$post->id)}}"><i class="fas fa-pencil-alt fa-lg fa-fw"></i></a>
                <!-- bottone modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$post->id}}">
                    <i class="fas fa-trash"></i>
                </button> 

        <!-- Modal -->
                <div class="modal fade" id="delete{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$post->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete post {{$post->title}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    ⚡ Attenzione questa operazione non puo essere annullata!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
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