<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Modification d'un etudiant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="bg-secondary">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container col-md-6 mx-auto">
        <div class="card mt-4 mb-2">
            <div class="card-header bg-info text-center text-white">Modification d'un etudiant</div>
            <div class="card-body mb-3">
                <h5 class="card-title"></h5>
                <form method="post" action="/modifier/traitement">
                    @csrf
                    <input name="id" type="text" style="display: none" value="{{ $etudiant->id ?? 'None' }}">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" placeholder='Code' name="code"
                            value="{{ $etudiant->code ?? 'None' }}">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" name="nom"
                            value="{{ $etudiant->nom ?? 'None' }}">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" placeholder="Prenom" name="prenom"
                            value="{{ $etudiant->prenom ?? 'None' }}">
                    </div>
                    <div class="form-group">
                        <label for="niveau">Niveau</label>
                        <input type="text" class="form-control" placeholder="Niveau" name="niveau"
                            value="{{ $etudiant->niveau ?? 'None' }}">
                    </div>
                    <div class="form-group">
                        <label for="code_f">Filiere</label>
                        <input type="text" class="form-control" placeholder="Filiere" name="code_f"
                            value="{{ $etudiant->code_f ?? 'None' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                    <a class="btn btn-info" href="/"><i class="bi bi-house"></i> </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
