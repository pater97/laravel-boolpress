@extends('layouts.app')

@section('content')
    <section id="post_welcome">
        <div class="container">
            <h1 class="text-center">
                I NOSTRI POST:
            </h1>   
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$post->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$post->title}}</h5>
                              <p class="card-text">{{$post->sub_title}}</p>
                              <a href="#" class="btn btn-primary">guarda il post</a>
                            </div>
                          </div>
                    </div>
                @endforeach
    
            </div>
        </div>
    </section>
@endsection