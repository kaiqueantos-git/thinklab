<?php
    $mysql = new mysqli("localhost", "root", "", "scholarbase", 3306);

    // tem que fazer a lógica toda, última anotação do laerte ele fala
?>

<html>
    <head>
        <title>Login</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="Estilo.css">
    </head>
    <body class="bg-light min-vh-100 d-flex align-items-center justify-content-center p-0 m-0">
        <div class="container-fluid min-vh-100 d-flex flex-column flex-lg-row p-0">
            
                <div class="col-12 col-lg-6 position-relative d-flex flex-column justify-content-between p-4 p-md-5 text-white bg-imagem-fundo overflow-hidden">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 z-0"></div>

                <div class="position-relative z-1 d-flex align-items-center gap-2">
                    <div class="rounded-circle bg-primary bg-opacity-25 d-flex align-items-center justify-content-center p-2">
                        <i class="bi bi-search text-info fs-5"></i>
                    </div>
                    <span class="fw-bold tracking-wider fs-5 text-uppercase">THINK<span class="text-info">LAB</span></span>
                </div>

                <div class="position-relative z-1 mt-5 pt-5 mb-4">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-dark bg-opacity-50 border border-secondary border-opacity-50 mb-3">
                        <span class="spinner-grow spinner-grow-sm text-success" role="status"></span>
                        <span class="small fw-medium text-light">Visão Computacional & Diagnóstico</span>
                    </div>

                    <h1 class="display-5 fw-bold text-white mb-2"> Pesquisa científica </h1>
                    <h1 class="display-5 fw-bold mb-2 text-info">ao seu alcance</h1>

                    <p class="text-white text-opacity-75 small col-10 col-md-8 p-0">
                        Acesse publicações em Visão Computacional aplicada ao diagnóstico da Doença de Chagas.
                    </p>
                </div>
            </div>

            <div class="col-12 col-lg-6 bg-white d-flex flex-column justify-content-center align-items-center p-4 p-md-5">
                <div class="w-100 tamanho-div">
                    
                    <div class="mb-4">
                        <h2 class="fw-bold text-dark fs-3 mb-1">Bem-vindo de volta</h2>
                        <p class="text-muted small">Não tem conta? <a href="register.php" class="text-decoration-none text-primary fw-medium">Criar conta</a></p>
                    </div>

                    <form method="post" action="login.php">
                        <div class="mb-3">  
                            <label for="email" class="form-label text-secondary small fw-semibold">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control bg-light border-start-0 py-2 text-muted" placeholder="seu@email.com">
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="senha" class="form-label text-secondary small fw-semibold mb-0">Senha</label>
                                <a href="esqueci_senha.php" class="text-decoration-none small text-primary">Esqueceu a senha?</a>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" name="senha" class="form-control bg-light border-start-0 py-2 text-muted" placeholder="••••••••">
                            </div>
                        </div>

                        <button type="submit" class="btn w-100 py-2 fw-medium text-white shadow-sm button-login">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>