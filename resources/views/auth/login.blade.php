<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulaire d'inscription</title>
  <!-- Inclure Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-secondary">
   @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
  <div class="container col-md-6 mt-5">
    <div class="card">
        <div class="card-header"> <h3>S'authentifier</h3></div>
        <div class="card-body">
        
    <form method="post" action="/authentifier">
    @csrf
      <div class="form-group">
        <label for="email">Adresse e-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse e-mail">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
      </div>
      <button type="submit" class="btn btn-primary">Soumettre</button>
      <a href="/register" class="btn btn-outline-primary ">S'inscrire</a>
    </form></div>
    </div>
  </div>
  <!-- Inclure jQuery et Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>