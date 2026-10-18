<?php
    $mysql = new mysqli("localhost", "root", "", "scholarbase", 3306);

    if (sizeof($_POST) > 0) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirm_senha = $_POST["confirm_senha"];

        $rs = $mysql->query("SELECT * FROM usuario WHERE email='$email'");

        if (empty($nome) || empty($email) || empty($senha) || empty($confirm_senha)) {
            $mensagem_erro = "Preencha todos os campos!";
        } elseif ($rs->num_rows > 0) {
            $mensagem_erro = "Esse email já está cadastrado. Tente realizar login!";
        } elseif ($senha !== $confirm_senha) {
            $mensagem_erro = "As senhas são diferentes! Tente novamente.";
        } else {
            $senha = password_hash($senha, PASSWORD_DEFAULT);

            $mysql->query("INSERT INTO usuario(email, nome, senha) VALUES('$email', '$nome', '$senha')");
            header("Location: login.php");
            exit;
        }
    }
?>

<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/js/bootstrap.min.js" integrity="sha512-nKXmKvJyiGQy343jatQlzDprflyB5c+tKCzGP3Uq67v+lmzfnZUi/ZT+fc6ITZfSC5HhaBKUIvr/nTLCV+7F+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Registro</title>
    </head>
    <body class="bg-light min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <div class="bg-dark text-white rounded-3 p-2 mb-3 d-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px;">
                <i class="bi bi-person-plus-fill fs-5"></i>
            </div>

            <h1 class="h3 fw-bold text-dark mb-1">Crie sua Conta</h1>
            <p class="text-muted mb-4">Cadastre-se para começar</p>

            <?php if (!empty($mensagem_erro)): ?>
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <?php echo $mensagem_erro; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5 bg-white w-100" style="max-width: 460px;">
                <form method="POST" action="register.php">
                    <div class="mb-3">
                        <p class="form-label text-secondary small fw-semibold">Nome</p>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-muted">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" name="nome" class="form-control bg-light border-start-0 py-2 text-muted" placeholder="Nome">
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="form-label text-secondary small fw-semibold">Email</p>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-muted">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="text" name="email" class="form-control bg-light border-start-0 py-2 text-muted" placeholder="seu@exemplo.com">
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="form-label text-secondary small fw-semibold">Senha</p>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-muted">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" name="senha" class="form-control bg-light border-start-0 py-2 text-muted" placeholder="••••••••">
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="form-label text-secondary small fw-semibold">Confirmar Senha</p>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-muted">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" name="confirm_senha" class="form-control bg-light border-start-0 py-2 text-muted" placeholder="••••••••">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-2 fw-medium shadow-sm">Criar conta</button>
                </form>
            </div>

            <footer class="mt-4 text-center text-muted small">
                <p>Já possui uma conta? <a href="login.php" class="text-decoration-none fw-semibold text-dark">Entrar</a></p>       
            </footer>
        </div>
    </body>
</html>