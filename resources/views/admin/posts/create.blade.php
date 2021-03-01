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
<form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">

    @csrf
    @method('POST')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title"  value="">
    </div>
    <div class="form-group">
        <label for="author">Autore</label>
        <input type="text" class="form-control" name="author" id="author"  value="">
    </div>

    <div class="form-group">
        <label for="body">Nuovo articolo</label>
        <textarea class="form-control" name="body" id="body" rows="6"></textarea>
    </div>

    <div class="form-group">
        <label for="img_path">Immagine</label>
        <input type="file" class="form-control" name="img_path" id="img_path"  accept="image/*">
    </div>

    <input class="btn btn-dark" type="submit" value="invia">

    
</form>
</div>
@endsection