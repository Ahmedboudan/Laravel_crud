<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Ajout d'un étudiant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .form-group label {
            display: block;
        }
    </style>
</head>

<body class="bg-secondary">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6">
                <div class="card mt-4 mb-4">
                    <div class="card-header bg-info text-center text-white">
                        Ajout d'une filière
                    </div>
                    <div class="card-body">
                        <form method="post" action="/ajouter_filiere/traitement" class="was-validated">
                            @csrf
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" class="form-control" placeholder='Code' name="code_f" required>
                                <div class="valid-feedback">Valide</div>
                                <div class="invalid-feedback">Veuillez remplir ce champ</div>
                            </div>
                            <div class="form-group">
                                <label for="nom">Désignation</label>
                                <input type="text" class="form-control" name="designation" required placeholder='Nom'>
                                <div class="valid-feedback">Valide</div>
                                <div class="invalid-feedback">Veuillez remplir ce champ</div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                <a class="btn btn-info" href="/lister_filiere"><i class="bi bi-arrow-right-square"></i> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/bootstrap-icons@1.6.1/bootstrap-icons.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
