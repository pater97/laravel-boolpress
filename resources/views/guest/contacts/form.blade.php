@extends('layouts.app')

@section('content')
    <h1>Mail page</h1>
    <div class="container d-flex ">
        <form action="{{route('contacts.send')}}" method="post" >
            @csrf
            <label for="name">
             <input type="text" name="name" id="name" placeholder="mario rossi">   
            </label>
    
            <label for="email">
                <input type="text" name="email" id="email" placeholder="abc@gmail.com">   
            </label>
    
            <label for="body">
                <textarea name="body" id="body" cols="30" rows="10">
                </textarea>
            </label>
    
            <button type="submit">
                invia
            </button>
        </form>
    </div>
@endsection