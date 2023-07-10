<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modification d'une filiere</title>
  <!-- Inclure Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-secondary">
   @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
  <div class="container col-md-6 mx-auto mt-4">
    <div class="card">
      <div class="card-header bg-info text-center text-white">
        Modification d'une filiere
      </div>
      <div class="card-body">
        <form method="post" action="/modifier_filiere/traitement">
          @csrf
          <input name="id" type="hidden" value="{{ $filiere->id ?? 'None' }}">
          <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" placeholder='Code' name="code_f" value="{{ $filiere->code_f ?? 'None' }}">
          </div>
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" placeholder="Nom" name="designation" value="{{ $filiere->designation ?? 'None' }}">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a class="btn btn-info" href="/"><i class="bi bi-house"></i></a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Inclure jQuery et Bootstrap JS -->
  <script src="https://unpkg.com/bootstrap-icons@1.6.1/bootstrap-icons.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
