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

<body style="background-color: #ddd;">
    @include('templates.navbar')

    <div class="continer">
        <div class="row justify-content-center">
            <div class="card w-75 mt-4 mb-5">
                <div class="card-header bg-dark text-light">
                    Une plateforme pour la gestion efficace des etudiants
                </div>
                <div class="card-body">
                    <h5 class="card-title">Gestion etudiants ENSAT</h5>
                    <p class="card-text">Une application web de gestion des etudiants en utilisant le framework laravel pour le back-end et bootstrap pour le front-end.</p>
                    <a href="http://ensat.ac.ma/Portail/" class="btn btn-primary">ENSAT site</a>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicateurs -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="https://media.licdn.com/dms/image/C4E22AQGW9ldToG1JFA/feedshare-shrink_2048_1536/0/1677076067495?e=1692230400&v=beta&t=LevJoc7FtQO0JoU6Tly3ftDNoEhNkCceQacwMbd3MyY" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://media.licdn.com/dms/image/C4E22AQFVt4GAZhcPfw/feedshare-shrink_2048_1536/0/1677076071485?e=1692230400&v=beta&t=-aAYZHx-pkEmukvbIWHC6cB8npTnqY9t2EVeNwFYCnQ" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://media.licdn.com/dms/image/C4E22AQFEVhQ5PrE7Mw/feedshare-shrink_2048_1536/0/1677076071335?e=1692230400&v=beta&t=4gIzn1nXn4__QREWDLhbSX-RpBvq4950TtlLF8-X3iU" alt="Image 3">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://media.licdn.com/dms/image/C4E22AQE2wemrcdf_sg/feedshare-shrink_2048_1536/0/1664900570141?e=1692230400&v=beta&t=XkQ-KKalWsI2XEzoQdFwiBvmzCeUaqmhgjVlmHTEvGQ" alt="Image 3">
                        </div>
                    </div>

                    <!-- Contrôles -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
                <!-- <img class="card-img-bottom" src="https://static.lematin.ma/files/lematin/images/articles/2019/12/3db8f07b8c12c39edf6805759fa90a5a.jpg"> -->
            </div>

        </div>
    </div>

    @include('templates.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>