@extends('layouts.admin')

@section('content')
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

    <h3>Tags</h3>
    @foreach ($tags as $tag)
         <div class=" custom-checkbox mb-3">
            <input type="checkbox" class="custom-input" id="tag-{{$tag->id}}" name="tags[]" value="{{$tag->id}}" 
                @if ($post->tags->contains($tag->id))
                     checked
                @endif>
            <label class="custom-label" for="tag-{{$tag->id}}">{{$tag->name}}</label>
        </div>
    @endforeach 

    <input class="btn btn-dark" type="submit" value="invia">

    
</form>
@endsection