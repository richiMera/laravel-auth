@extends('layouts.app')

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Data_Creazione</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($posts as $post)
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->author}}</td>
            <td>{{$post->created_at}}</td>
        @endforeach
      </tr>
    </tbody>
  </table>
  

@endsection