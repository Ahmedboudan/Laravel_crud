<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">ENSA TANGER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-info" href="/accueil"><i class="fas fa-home"></i>  Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success" href="/lister"><i class="fas fa-users"></i> Etudiants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="/lister_filiere"><i class="fas fa-book"></i> Filières</a>
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