@extends("layout")

@section("title", "Liste users")


@section("content")
    <div class="container mt-5">
        <h1 class="text-center mb-4">Liste des Utilisateurs</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nom'] }}</td>
                    <td>{{ $user['prenom'] }}</td>
                    <td>{{ $user['email'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
