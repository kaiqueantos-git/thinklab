<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">THINK<span class="orange">LAB</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Artigos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>

                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                </ul>
                <div class="perfil ms-auto d-none d-lg-block">
                    <a href="#">
                        <i class="bi bi-person-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="title">Publicações</h1>
        <h2 class="subtitle">Pesquise e explore artigos já publicados.</h2>
        <div class="container mt-">
            <div class="row align-items-start">
                <div class="col-12 col-sm-7 gy-2">
                    <div class="pesquisa">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Buscar artigo por título, resumo ou palavras-chave...">
                    </div>
                </div>
                <div class="col-12 col-sm-5 gy-2">
                    <div class="btn-group" role="group">
                        <button type="button" class="filtro-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtro
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    </div>
</body>

</html>