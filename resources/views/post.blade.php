{{-- @extends('layouts.main') --}}

{{-- @section('content') --}}
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>publié par : <a href="{{ route('user.show', $user->id) }}">{{ $post->user_id }}</a></p>
    <img src="/images/icone_coeur.svg" height="17" alt="icone like">
    <img src="/images/icone_comment.svg" height="17" alt="icone commentaire"> 
      
{{-- @endsection --}}