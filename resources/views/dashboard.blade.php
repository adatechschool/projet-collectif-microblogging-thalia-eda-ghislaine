<x-app-layout>
<h1 class="text-2xl font-bold px-4 py-3">Ma page</h1>
{{-- <h2>Mes posts</h2>
<p>Je crée un nouveau post</p>
<h2>Mes abonnements</h2> --}}
<div>
    <h2>Mes Posts</h2>

    @forelse ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <!-- Ajoute d'autres détails du post selon ta structure de données -->
        </div>
    @empty
        <p>Aucun post disponible pour le moment.</p>
    @endforelse
</div>

</x-app-layout>
