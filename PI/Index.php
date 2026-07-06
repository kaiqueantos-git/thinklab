<!DOCTYPE html>
<html lang="pt-br">

<head>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Artigos</a>
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

    <div class="containetr">
        <!-- <div class="Inicio">
            <img src="Imgs\HomeMicroscopio.png" alt="Home">
        </div> -->
        <div class="texto d-flex flex-column justify-content-center">
            <h1 class="apres">Inovação na Detecção do <span class="destaque">Trypanosoma cruzi</span></h1>
            <p class="subtitle">Pesquisas avançadas em Visão Computacional aplicada ao diagnóstico automatizado da Doença de Chagas, lideradas pelo Prof. Geovani Martins.</p>
            <div class="row grupo-btn">
                <div class="col pe-0">
                    <button href="publicacoes.php" id="btn1H" type="button" class="btn btn-primary"><a class="link1" href="publicacoes.php">Ver publicações</a></button>
                </div>
                <div class="col">
                    <button id="btn2H" type="button" class="btn btn-primary"><a class="link1" href="sobreNos.php">Sobre a pesquisa</a></button>
                </div>
            </div>
        </div>


    </div>

    <div class="publicacoesInfo">
        <h1 id="PR">Publicações Recentes</h1>
        <p>Artigos científicos e pesquisas nas áreas de Visão Computacional e Diagnóstico Médico.</p>
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="card" style="width: 25rem;">
                        <img src="Imgs\home1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Detecção de Anomalias em Imagens Médicas com Aprendizado Profundo </h5>
                            <p class="card-text">Investigamos a aplicação de técnicas de aprendizado profundo não supervisionado para detecção de anomalias em imagens médicas.</p>
                            <a href="#" class="linkhome">Ler mais -></a>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card" style="width: 25rem;">
                        <img src="Imgs\home2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Análise de Trajetórias de Microorganismos em Amostras Biológicas </h5>
                            <p class="card-text">Apresentamos uma abordagem inovadora para análise do comportamento cinemático de microorganismos em amostras biológicas.</p>
                            <a href="#" class="linkhome">Ler mais -></a>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card" style="width: 25rem;">
                        <img src="Imgs\home3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Detecção Automática do Trypanosoma cruzi em Imagens de Microscopia usando Redes</h5>
                            <p class="card-text">Este trabalho propõe um sistema de detecção automática do Trypanosoma cruzi em amostras de sangue </p>
                            <a href="#" class="linkhome">Ler mais -></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="linhasPesq">
        <h1 id="formacaoh">Linhas de Pesquisa</h1>
        <p id="pcentro">Áreas de investigação que compõem o escopo do grupo de pesquisa.</p>


        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="card" style="width: 20rem;">
                        <div class="card-icon">🧠</div>
                        <div class="card-body">
                            <h5 class="card-title">Saliência de Movimento</h5>
                            <p class="card-text">Desenvolvimento de mapas de saliência baseados em movimento para identificação automática de regiões de interesse em sequências de vídeo microscópico.</p>

                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card" style="width: 20rem;">
                        <div class="card-icon">🔬</div>
                        <div class="card-body">
                            <h5 class="card-title">Análise de Trajetórias</h5>
                            <p class="card-text">Estudo do comportamento cinemático de microorganismos em amostras de sangue, utilizando algoritmos de rastreamento para caracterizar padrões de movimentação do Trypanosoma cruzi.</p>

                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card" style="width: 20rem;">
                        <div class="card-icon">📈</div>
                        <div class="card-body">
                            <h5 class="card-title">Detecção de Anomalias</h5>
                            <p class="card-text">Criação de modelos computacionais para detecção de padrões anômalos em imagens de microscopia, aplicados ao diagnóstico automatizado da Doença de Chagas.
                            <p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="sobreContainer">

        <div class="SobreProfImg">
            <img src="Imgs\sobreNosImg.png" alt="">
        </div>

        <div class="SobreProf">
            <h1 id="PR">Prof. Geovani Martins</h1>
            <p>Professor e pesquisador com atuação em Visão Computacional, concentrando-se no desenvolvimento de soluções computacionais inovadoras para o diagnóstico médico automatizado.<br>
                Sua pesquisa abrange Análise de Trajetórias, Saliência de Movimento e Detecção de Anomalias, contribuindo para o avanço do diagnóstico automatizado em saúde pública.</p>
            <button id="btn3H" type="button" class="btn btn-primary"><a id="link3" href="sobreNos.php">Sobre a pesquisa</a></button>

        </div>


    </div>




    <div class="rodape">
        <img src="Imgs\LogoThinkLab.png" alt="Logo">
        <div class="inf-gerais">
            <p class="titulo-rodape">Instituto Federal de Minas Gerais</p>
            <p class="texto-rodape">© 2025 ThinkLab</p>
            <p class="texto-rodape">Desenvolvedores: Ana Clara, Beatriz, Davi Barbosa, Emanuel Teixeira, Kaique, Kauany,
                Laís,Letícia,Nayara e Victória</p>
        </div>
    </div>
</body>

</html>