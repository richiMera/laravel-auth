@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-3">{{$post->title}}</h2>
        <p><strong>Di {{$post->author}}</strong> - {{$post->body}}</p>

    </div>
@endsection