@extends('layouts.admin')


@section('content')

<h1>Modication the post</h1>

@include('partials.errors')

<form action="{{route('admin.posts.update',$post->id)}}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="new post" aria-describedby="titleHelper" value="{{$post->title}}">
        <small id="titleHelper" class="text-muted">Type a title for your post</small>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="text" name="image" id="image" class="form-control" placeholder="https://" aria-describedby="imageHelper" value="{{$post->image}}">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sub_title" class="form-label">sub_title</label>
        <input type="text" step="0.01" name="sub_title" id="sub_title" class="form-control" placeholder="sub title here..." aria-describedby="sub_titleHelper" value="{{$post->sub_title}}">
        <small id=" sub_titleHelper" class="text-muted">Type a sub title for your post</small>
        @error('sub_title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="genre" class="form-label">description</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="type here your description" aria-describedby="descriptionHelper" value="{{$post->description}}">
        <small id=" descriptionHelper" class="text-muted">Type a description for your post</small>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <div class="mb-3">
            <label for="category_id" class="form-label">Categories</label>
            <select class="form-control @error('category_id') is_invalid @enderror" name="category_id" id="category_id">
                <option value="" selected>Select a category</option>
    
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
    
            </select>
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-dark">Save</button>
</form>
@endsection