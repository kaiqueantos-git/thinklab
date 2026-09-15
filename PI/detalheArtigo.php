
<?php

    $id = $_GET["id"];

    $mysql = new mysqli("localhost", "root", "", "ScholarBase", "3306");

    $rs = $mysql->query("SELECT * FROM artigo WHERE id='$id'");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">

</head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Estilo.css">
</head>

<body>
    <!-- <NavBar!--  -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">THINK<span class="orange">LAB</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="Index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../thinklab/artigo.php">Artigos</a>
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
                    <a href="#">
                        <i class="bi bi-person-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div id="detalhes-artigo">

        <?php foreach($rs as $ln){ ?>
        <div id="conteudo-artigo">


            <h1 id="titulo-artigo"><?= $ln["titulo"] ?></h1>

            <p id="resumo-artigo"><?= $ln["resumo"] ?></p>

            <p id="data-artigo">Publicado em:<?= date("d/m/Y", strtotime($ln["data_publicacao"])) ?></p>

            <p id="doi-artigo">DOI: <?= $ln["doi"] ?></p>

            <a id="link-artigo" href="<?= $ln["link"] ?>" target="_blank">Acessar artigo</a>

        
            </div>

        <a id="voltar-artigo" href="Index.php">Voltar </a>
<?php } ?>
    </div>

</body>

</html>