<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Gestion eleve</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-secondary">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @include('templates.navbar')

    <div class="container " style="margin-top: 100px;">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5>Gestion des élèves</h5>
            </div>
            <div class="card-body mb-4">
                <div class="card-title">Liste des élèves</div>
                <form action="/rechercher" method="get" class="form-inline mb-3">
                    <div class="form-group d-flex align-items-center">
                        <input type="text" name="code" value="{{ isset($code) ? $code : '' }}" class="form-control" placeholder="Rechercher avec le code...">
                        <button type="submit" class="btn btn-outline-primary ml-2"><i class="bi bi-search"></i></button>
                    </div>
                    <a class="btn btn-primary ml-2" href="/ajouter"><i class="bi bi-plus"></i></a>

                </form>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">Code</th>
                                <th scope="col" class="text-center">Nom</th>
                                <th scope="col" class="text-center">Prenom</th>
                                <th scope="col" class="text-center">Niveau</th>
                                <th scope="col" class="text-center">Filiere</th>
                                <th scope="col" class="text-center" colspan="2">Actions</th> <!-- Modifier l'en-tête -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etudiants as $etudiant)
                            <tr>
                                <td class="text-center">{{ $etudiant->code }}</td>
                                <td class="text-center">{{ $etudiant->nom }}</td>
                                <td class="text-center">{{ $etudiant->prenom }}</td>
                                <td class="text-center">{{ $etudiant->niveau }}</td>
                                <td class="text-center">{{ $etudiant->code_f }}</td>
                                <td class="text-center">
                                    <a href="/modifier/{{ $etudiant->id }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="/supprimer/{{ $etudiant->id }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    {{ $etudiants->links() }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>