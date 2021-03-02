<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="{{asset('js/app.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header>
            <h3 class="logo">Logo Agenzia</h3>

            <ul class="admin_panel_list">
                <li class="active"><a href="{{route('admin.posts.create')}}">Crea Nuovo </a></li>
                <li><a href="{{route('admin.posts.index')}}">Elenco Posts</a></li>
            </ul>
        </header>

        <main>
            <div class="header_top_main">
                <a href="">{{Auth::user()->name}}</a>
            </div>
            <div class="container mt-5"> 
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
                