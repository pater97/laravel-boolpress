@extends('layouts.app')

@section('content')
    <section id="show_post">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{$post->image}}" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="text-danger">{{$post->title}}</h2>
                    <h5 class="text-muted">{{$post->sub_title}}</h5>
                    <p>{{$post->description}}</p>
                    <button class="btn btn-success">
                        <a class="text-white" href="{{route('posts.index')}}">Torna ai post</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection