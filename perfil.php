<?php
    $mysql = new mysqli("localhost", "root", "", "scholarbase", 3306);

    session_start();
    if(isset($_SESSION['usr'])) {
        $usuario_id = $_SESSION['usr']['id'];
        $rs = $mysql->query("SELECT a.titulo, a.resumo FROM favorito f JOIN artigo a ON a.id = f.artigo_id WHERE usuario_id = '$usuario_id'");
    } else {
        $erro = "Permissão negada";
    }
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="style.css" rel="stylesheet">
    </head>
    <body class="bg-light d-flex flex-column min-vh-100">

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">THINK<span class="orange">LAB</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="artigo.php">Artigos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobreNos.php">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="#">Perfil</a>
                        </li>
                    </ul>
                    <div class="perfil ms-auto d-none d-lg-block">
                        <a href="perfil.php">
                            <i class="bi bi-person-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex-grow-1 py-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 d-flex align-items-center gap-3 flex-wrap">
                        <div class="rounded-circle bg-dark text-white d-flex align-items-center justify-content-center fw-bold fs-3" style="width: 80px; height: 80px;">
                            K
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1">Kaique</h2>
                            <p class="text-muted mb-2"><i class="bi bi-envelope me-1"></i> kaiquesantosh8@gmail.com</p>
                            <div class="d-flex gap-2">
                                <button class="btn text-white fw-semibold d-flex align-items-center gap-2" style="background-color: #fd7e14;">
                                    <i class="bi bi-plus-lg"></i> Adicionar Postagem
                                </button>
                                <button class="btn btn-outline-secondary d-flex align-items-center gap-2 bg-white text-dark">
                                    <i class="bi bi-box-arrow-right"></i> Sair
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Abas[cite: 1] -->
                <ul class="nav nav-tabs mb-4 border-bottom">
                    <li class="nav-item">
                        <a class="nav-link active text-dark fw-semibold border-bottom border-3 border-dark bg-transparent" href="#">
                            <i class="bi bi-file-text me-1"></i> Criados (1)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">
                            <i class="bi bi-star me-1"></i> Favoritos (1)
                        </a>
                    </li>
                </ul>

                <!-- Card de Publicação[cite: 1] -->
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body p-4 position-relative">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="fw-bold mb-1">teste</h5>
                                <p class="text-muted mb-0">123</p>
                            </div>
                            <div class="d-flex gap-3 fs-5">
                                <a href="#" class="text-warning"><i class="bi bi-pencil-fill"></i></a>
                                <a href="#" class="text-warning"><i class="bi bi-star-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-white py-5" style="background-color: #0d1b2a;">
            <div class="container">
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-search text-info fs-4"></i>
                            <span class="fw-bold fs-4">THINK<span class="text-warning">LAB</span></span>
                        </div>
                        <p class="text-white-50 small">
                            Portal de publicações científicas dedicado à pesquisa em Visão Computacional aplicada ao diagnóstico da Doença de Chagas.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold mb-3">Navegação</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2">
                            <li><a href="#" class="text-white-50 text-decoration-none">Home</a></li>
                            <li><a href="#" class="text-white-50 text-decoration-none">Artigos</a></li>
                            <li><a href="#" class="text-white-50 text-decoration-none">Sobre nós</a></li>
                            <li><a href="#" class="text-white-50 text-decoration-none">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold mb-3">Contate-nos</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 small">
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-telephone text-warning"></i> (00) 0000-0000</li>
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-envelope text-warning"></i> contato@thinklab.com</li>
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-box-arrow-up-right text-warning"></i> <a href="#" class="text-white-50 text-decoration-none">Google Scholar</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="border-secondary">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small text-white-50">
                    <p class="mb-0">&copy; 2025 THINKLAB. Todos os direitos reservados.</p>
                    <div class="d-flex gap-4">
                        <a href="#" class="text-white-50 text-decoration-none">ORCID</a>
                        <a href="#" class="text-white-50 text-decoration-none">Google Scholar</a>
                        <a href="#" class="text-white-50 text-decoration-none">Web of Science</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>