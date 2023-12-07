<!-- resources/views/users/index.blade.php -->
<h1>Liste des utilisateurs</h1>
<ul>
@foreach($users as $user)
    <li><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></li>
    <!-- Affiche d'autres détails de l'utilisateur selon tes besoins -->
@endforeach

</ul>