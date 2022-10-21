<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../_css/style.css">
    <title>rbsCoud</title>
</head>
<body class="painel">

<!-- criando o navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-painel">

    <h4 class="text-logo">rbs.<span class="text-logo-span">Cloud</span></h4>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <!-- input de pesquisa interno AJAX-->
        <form class="form-inline mx-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="buscar no sistema " aria-label="pesquisar" size="70%" style="margin-left: 30%">
        </form>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="#" style="font-size: 1.4rem"><i class="bi bi-person-circle icons-navbar"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" style="font-size: 1.4rem"><i class="bi bi-gear"></i></a>
            </li>
            <li class="nav-item">
                <a href="../index.php" class="nav-link " style="font-size: 1.4rem"><i class="bi bi-box-arrow-left icons-navbar"></i></a>
            </li>
        </ul>
    </div>
</nav>



<!-- criando o painel principal -->

<div class="d-flex">
    <nav class="sidebar">
        <a href="painel.php" style="font-weight: bold"><p class="titles-dashboard"><i class="bi bi-speedometer2 icons-navbar"></i> &nbsp;Dashboard Geral</p></a>
        <a href="desenvolvimento.php"><p class="titles-dashboard"><i class="bi bi-code-slash icons-navbar"></i> &nbsp;Desenvolvimento Web</p></a>
        <a href="mdigital.php"><p class="titles-dashboard"><i class="bi bi-bullseye"></i> &nbsp;Marketing Digital</p></a>
        <a href="tutoriais.php"><p class="titles-dashboard"><i class="bi bi-terminal-dash icons-navbar"></i> &nbsp;Tutoriais & Dicas</p></a>
        <a href="downloads.php"><p class="titles-dashboard"><i class="bi bi-cloud-download icons-navbar"></i> &nbsp;Downloads</p></a>
        <a href="uploads.php"><p class="titles-dashboard"><i class="bi bi-cloud-upload"></i> &nbsp;Upload de material</p></a>
        <a href="settings.php"><p class="titles-dashboard"><i class="bi bi-gear icons-navbar"></i> &nbsp;Configurações</p></a>
    </nav>

    <!-- criando a tela de conteúdo-->
    <div class="content p-2">
        <div class="list-group-item box-content">
            <div class="mr-auto p-2">
                <h3 class="display-4 title-content">Painel Dashboard</h3>
            </div>
           <div class="d-flex justify-content-around">
               <!-- sessão cards -->
               <div class="row mb-2">
                    <div class="card bg-light mx-3 ">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Conteúdo cadastrados</h5>
                                <div class="card-text">

                                </div>
                            </div>
                        </div>
                            <div class="card-footer">
                                <small class="text-muted">Atualizados 3 minutos atrás</small>
                            </div>
                    </div>

                   <div class="card bg-light mx-3">
                       <div class="card-body">
                           <div class="card-title">
                               <h5>Conteúdo cadastrados</h5>
                               <div class="card-text">

                               </div>
                           </div>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted">Atualizados 3 minutos atrás</small>
                       </div>
                   </div>

                   <div class="card bg-light mx-3">
                       <div class="card-body">
                           <div class="card-title">
                               <h5>Conteúdo cadastrados</h5>
                               <div class="card-text">

                               </div>
                           </div>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted">Atualizados 3 minutos atrás</small>
                       </div>
                   </div>

                   <div class="card bg-light mx-3">
                       <div class="card-body">
                           <div class="card-title">
                               <h5>Conteúdo cadastrados</h5>
                               <div class="card-text">

                               </div>
                           </div>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted">Atualizados 3 minutos atrás</small>
                       </div>
                   </div>

               </div>

           </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>