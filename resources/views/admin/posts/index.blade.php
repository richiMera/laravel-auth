@extends('layouts.app')

@section('content')

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Data_Creazione</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($posts as $post)
              <td>{{$post->id}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->author}}</td>
              <td>{{$post->created_at}}</td>
              <td></td>
          @endforeach
        </tr>
      </tbody>
    </table>
    <a href="{{route('admin.posts.create')}}" class="btn btn-primary my-3">Crea nuovo articolo</a>
  </div>
  

@endsection