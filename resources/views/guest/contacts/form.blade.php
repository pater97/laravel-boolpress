@extends('layouts.app')

@section('content')
    
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">contattaci</h1>
        <p class="lead">un modo agile di comunicare</p>
        @if(session('message'))
        <div class="alert alert-success" role="alert">
          <strong>{{session('message')}}</strong>
        </div>
        @endif
        <form action="{{route('contacts.send')}}" method="post">
            @csrf
            <div class="row my-5">
                <div class="col">
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" required>
                    <small class="text-muted">type your name here</small>
                </div>
                <div class="col">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="@" required>
                    <small id="emailHelpId" class="form-text text-muted">your email here</small>
                </div>
            </div>
            <div class="mb-3">
                <label for="message">message</label>
                <textarea name="message" id="message" cols="30" rows="5"></textarea>
            </div>
            <div class="justify-content-center">
                <button type="submit" class="btn btn-success">
                    invia
                </button>
            </div>
        </form>
    </div>
</div>
    
@endsection
