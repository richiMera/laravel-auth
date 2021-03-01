@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="my-3">{{$post->title}}</h2>
        <img class="img-fluid" style="width: 300px" src="{{asset('storage/' . $post->img_path)}}" alt="">
        <p><strong>Di {{$post->author}}</strong> - {{$post->body}}</p>

    </div>
@endsection