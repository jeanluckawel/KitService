<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Liste des Employés</h2>
        <!-- Message de succès -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom Complet</th>
                    <th>Identifiant</th>
                    <th>Département</th>
                    <th>Poste</th>
                    <th>Genre</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Date de Naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->firstName }} {{ $employee->lastName }}</td>
                        <td>{{ $employee->employeeId }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>{{ $employee->function }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->adress }}</td>
                        <td>{{ $employee->dateOfBirth }}</td>
                        <td>

                            <!-- Bouton Modifier -->
                            <a href="#" class="btn btn-primary btn-sm">Modifier</a>

                            <!-- Formulaire Supprimer -->
                            <form action="{{ route('addnewemployee.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment désactiver cet employé ?')">
                                    Supprimer
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/addnewemployee/create">New employee</a>
    </div>
</body>
</html>
