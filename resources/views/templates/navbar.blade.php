<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">ENSA TANGER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>Menu
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lister">Gestion des étudiants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lister_filiere">Gestion de filières</a>
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