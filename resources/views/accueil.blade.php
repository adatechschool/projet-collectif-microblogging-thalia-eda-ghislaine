{{-- @extends('layouts.main') --}}

{{-- @include('components.nav-link') --}}

<h1>Page d'accueil où il y a plein de belles photos</h1>

<ul>
    @foreach($articles as $article)
        <li>{{$article['title']}}</li>
    @endforeach
</ul>