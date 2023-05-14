<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Gestion eleve</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    </style>
</head>

<body class="bg-secondary">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Gestion des eleves</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ajouter">Ajouter un étudiant</a>
            </li>
        </ul>
        <div class="navbar-nav ml-auto">
            @auth
                <span class="nav-link">Bonjour {{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                <form action="{{ route('auth.logout') }} " method="post">
                    @method('delete')
                    @csrf
                    <button class="navbar-link btn btn-primary">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>

    <div class="container col-md-10 mt-5">
        <div class="card ">
            <div class="card-header bg-info text-white">
                <h5>Gestion des élèves</h5>
            </div>
            <div class="card-body mb-4">
                <div class="card-title">Liste des élèves</div>
                <form action="/rechercher" method="get" class="form-inline mb-3">
                    <div class="form-group">
                        <input type="text" name="code" value="{{ isset($code) ? $code : '' }}"
                            class="form-control" placeholder="Rechercher avec le code...">
                    </div>
                    <button type="submit" class="btn  btn-outline-primary "><i class="bi bi-search"></i></button>
                </form>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Code eleve</th>
                            <th scope="col" class="text-center">Nom</th>
                            <th scope="col" class="text-center">Prenom</th>
                            <th scope="col" class="text-center">Niveau</th>
                            <th scope="col" class="text-center">Filiere</th>
                            <th scope="col" class="text-center" colspan="2">Actions</th>
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
                                    <a href="/modifier/{{ $etudiant->id }}" class="btn btn-sm btn-outline-primary"><i
                                            class="bi bi-pencil"></i> </a>
                                </td>
                                <td class="text-center">
                                    <a href="/supprimer/{{ $etudiant->id }}"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')"
                                        class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-4 offset-md-4"> {{ $etudiants->links() }}</div>
            </div>

        </div>
    </div>
</body>

</html>
