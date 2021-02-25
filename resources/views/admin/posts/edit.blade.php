@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif
<form action="{{route('admin.posts.update', $post->id)}}" method="post">

    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title"  value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="author">Autore</label>
        <input type="text" class="form-control" name="author" id="author"  value="{{$post->author}}">
    </div>

    <div class="form-group">
        <label for="body">Nuovo articolo</label>
        <textarea class="form-control" name="body" id="body" rows="6">{{$post->body}}</textarea>
    </div>

    <input class="btn btn-dark" type="submit" value="invia">

    
</form>
</div>
@endsection