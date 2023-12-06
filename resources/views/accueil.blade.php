{{-- @extends('layouts.main') --}}

{{-- @include('components.nav-link') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<h1>Page d'accueil où il y a plein de belles photos</h1>

<ul>
    @foreach($posts as $post)
        <li><a href="{{$post->id}}">{{$post['title']}}</a></li>
    @endforeach
</ul>

</body>
</html>