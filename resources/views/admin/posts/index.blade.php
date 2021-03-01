@extends('layouts.admin')

@section('content')

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Data_Creazione</th>
          <th style="width: 150px">Img</th>
          <th colspan="3"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <img class="img-fluid" src="{{asset('storage/' . $post->img_path)}}" alt="">
                </td>
                <td><a href="{{route('admin.posts.show', $post)}}" class="btn btn-info">Info</a></td>
                <td><a href="{{route('admin.posts.edit', $post)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
          @endforeach
      </tbody>
    </table>
    <a href="{{route('admin.posts.create')}}" class="btn btn-primary my-3">Crea nuovo articolo</a>
  

@endsection