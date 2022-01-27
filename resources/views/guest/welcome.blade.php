@extends('layouts.app')

@section('content')

<section id="welcome_page">
    <div class="my-5">
        <div class="container">
            {{-- titolone --}}
            <div class="intro">
                <h1 class="display-3 text-center">Welcome to <span class="text-danger">Boolpress</span></h1>
            </div>
            <h5 class="lead text-center my-3 text-danger fw-bold">IL GESTIONALE NUMERO UNO AL MONDO!</h5>
            <hr class="my-2">
            {{-- sezione con bottoni --}}
            <div class="jumbo_container">
                <div class="row py-5">
                    {{-- bottone sinistra blog --}}
                    <div class="col-md-4 left_home">
                        <p class="lead d-flex justify-content-center">
                            <a class="btn btn-success btn-lg " href="{{route('posts.index')}}" role="button">Dai un'occhiata al nosrtro blog</a>
                        </p>
                    </div>
                    {{-- bottone centrale shop --}}
                    <div class="col-md-4 center_home">
                        <p class="lead d-flex justify-content-center">
                            <a class="btn btn-primary btn-lg " href="{{route('products.index')}}" role="button">Vai allo shop</a>
                        </p>
                    </div>
                    {{-- bottone destro admin mode --}}
                    <div class="col-md-4 right_home">
                        <p class="lead d-flex justify-content-center">
                            <a class="btn btn-dark btn-lg " href="{{route('admin.dashboard')}}" role="button">Entra nella modalità admin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection