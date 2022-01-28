@extends('layouts.app')

@section('content')
    <section id="post_welcome">
        <div class="container">
            <h1 class="text-center">
                I NOSTRI POST:
            </h1>   
            <div class="categories">
                <h5>
                    filtra per categoria:
                </h5>
                <ul class="d-flex justify-content-between">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{route('categories.posts',$category->slug)}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 my-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$post->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$post->title}}</h5>
                              <p class="card-text">{{$post->sub_title}}</p>
                              <p class="text-primary">{{$post->category->name}}</p>
                              <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">guarda il post</a>
                            </div>
                        </div>
                    </div>
                @endforeach
    
            </div>
        </div>
    </section>
@endsection