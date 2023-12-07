<x-app-layout>

{{-- @section('content') --}}
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->image }}" alt="photo de mon post">
    <p>{{ $post->content }}</p>
    <p>nombre de like: {{ $post->like }}</p>
    <p>publié le {{ $post->published }} par : <a href="{{ route('users.show', $post->user_id) }}">{{ $post->user_id }}</a></p>
    <img src="/images/icone_coeur.svg" height="17" alt="icone like">
    <img src="/images/icone_comment.svg" height="17" alt="icone commentaire"> 

{{-- @endsection --}}

</x-app-layout>