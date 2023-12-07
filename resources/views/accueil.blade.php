<x-app-layout>

<h1>Page d'accueil où il y a plein de belles photos</h1>

<ul>
    @foreach($posts as $post)
        <li><a href="{{ route('post.show', $post->id) }}">{{$post['title']}}</a></li>
    @endforeach
</ul>

</x-app-layout>