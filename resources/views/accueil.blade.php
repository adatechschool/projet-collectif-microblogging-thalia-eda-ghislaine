{{-- @extends('layouts.main') --}}

{{-- @include('components.nav-link') --}}

<h1>Page d'accueil où il y a plein de belles photos</h1>

<ul>
    @foreach($posts as $post)
        <li><a href="{{$post->id}}">{{$post['title']}}</a></li>
    @endforeach
</ul>