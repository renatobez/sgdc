<?php
 require "../core/functions.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>SGDC</title>
</head>
<body class="painel">
<!-- navegação topo -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">SGDC</a>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Nº de série, professor, escola..." aria-label="Pesquisar">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>
<!--painel principal -->
    <div class="row m-1">
        <div class="col-2 p-3" style="background: #e4e4e4; border-right: 1px solid #d5d5d5;">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="height: 100vh;">
                <!-- navbar chromebok-->
                <p class="nav-link"  data-toggle="pill"  role="tab" aria-selected="true" style="background:#161079; color:white;"><i class="bi bi-chevron-compact-right"></i>Despachos diretoria </p>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-journal-plus"></i> Cadastro</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-journal-text"></i> Consulta</a>
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="bi bi-clipboard2-data"></i> Relatórios </a>
                <!-- navbar professores-->
                <p class="nav-link m-2" data-toggle="pill"  role="tab" aria-selected="false" style="background:#225d5c; color:white;"><i class="bi bi-chevron-compact-right"></i> Gerência de Software</p>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-cadastro-prof" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-journal-plus"></i> Cadastro</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-consulta-prof" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-journal-text"></i> Consulta</a>
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-relatorio-prof" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="bi bi-clipboard2-data"></i> Relatórios </a>

                <p class="nav-link m-2" data-toggle="pill"  role="tab" aria-selected="false" style="background:#692c66; color:white;"><i class="bi bi-chevron-compact-right"></i> Gerência de Projetos</p>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-cadastro-prof" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-journal-plus"></i> Cadastro</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-consulta-prof" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-journal-text"></i> Consulta</a>
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-relatorio-prof" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="bi bi-clipboard2-data"></i> Relatórios </a>

                <p class="nav-link m-2" data-toggle="pill"  role="tab" aria-selected="false" style="background:#c98240; color:white;"><i class="bi bi-chevron-compact-right"></i> Gerência de Suporte</p>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-cadastro-prof" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-journal-plus"></i> Cadastro</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-consulta-prof" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-journal-text"></i> Consulta</a>
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-relatorio-prof" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="bi bi-clipboard2-data"></i> Relatórios </a>
            </div>
        </div>
        <div class="col-9 p-3">
            <div class="tab-content bg-light" id="v-pills-tabContent">
                <!-- navbar conteúdo professores-->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> relatórios </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Cadastro</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Consulta</div>
                <!-- navbar conteúdo professores-->
                <div class="tab-pane fade" id="v-pills-cadastro-prof" role="tabpanel" aria-labelledby="v-pills-profile-tab">Cadastro prof </div>
                <div class="tab-pane fade" id="v-pills-consulta-prof" role="tabpanel" aria-labelledby="v-pills-messages-tab">Consulta consulta prof</div>
                <div class="tab-pane fade" id="v-pills-relatorio-prof" role="tabpanel" aria-labelledby="v-pills-messages-tab">Consulta consulta prof</div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
<!-- azul #3b53b7 |  -->
</html>