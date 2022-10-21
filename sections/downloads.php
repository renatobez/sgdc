<?php
require  '../_core/tables_courses.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../_css/style.css">
    <title>rbsCoud - Downloads</title>
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
            <input class="form-control mr-sm-2" type="search" placeholder="buscar no sistema " aria-label="pesquisar" size="70%">
        </form>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="#" style="font-size: 1.5rem"><i class="bi bi-person-circle icons-navbar"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" style="font-size: 1.5rem"><i class="bi bi-gear"></i></a>
            </li>
            <li class="nav-item">
                <a href="../index.php" class="nav-link " style="font-size: 1.5rem"><i class="bi bi-box-arrow-left icons-navbar"></i></a>
            </li>
        </ul>
    </div>
</nav>



<!-- criando o painel principal -->

<div class="d-flex">
    <nav class="sidebar">
        <a href="painel.php" ><p class="titles-dashboard"><i class="bi bi-speedometer2 icons-navbar"></i> &nbsp;Dashboard Geral</p></a>
        <a href="desenvolvimento.php"><p class="titles-dashboard"><i class="bi bi-code-slash icons-navbar"></i> &nbsp;Desenvolvimento Web</p></a>
        <a href="mdigital.php"><p class="titles-dashboard"><i class="bi bi-bullseye"></i> &nbsp;Marketing Digital</p></a>
        <a href="tutoriais.php"><p class="titles-dashboard"><i class="bi bi-terminal-dash icons-navbar"></i> &nbsp;Tutoriais & Dicas</p></a>
        <a href="downloads.php" style="font-weight: bold"><p class="titles-dashboard"><i class="bi bi-cloud-download icons-navbar"></i> &nbsp;Downloads</p></a>
        <a href="uploads.php"><p class="titles-dashboard"><i class="bi bi-cloud-upload"></i> &nbsp;Upload de material</p></a>
        <a href="settings.php"><p class="titles-dashboard"><i class="bi bi-gear icons-navbar"></i> &nbsp;Configurações</p></a>
    </nav>

    <!-- criando a tela de conteúdo-->
    <div class="content p-2">
        <div class="list-group-item box-content">
           <div class="f-flex">
               <div class="mr-auto p-2">
                    <h3 class="display-4 title-content">Downloads</h3>
               </div>

               <!-- tablela com conteúdos upados -->

               <table class="table table-striped table-bordered table-sm shadow p-3 mb-3 bg-white rounded">
                   <thead>
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Nome</th>
                       <th scope="col">Categoria</th>
                       <th scope="col">Data upload</th>
                       <th scope="col">Usuário</th>
                       <th scope="col">Permissão</th>
                       <th scope="col">Ação</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <th scope="row">1</th>
                       <?php //buscando os dados do banco de dados
                            if(isset($course, $teachers, $hours)){
                                foreach ($course as $cursos){
                                    echo "<td>{$cursos}</td>";
                                }
                            }
                       ?>
                       </tr>

                       <th scope="row">1</th>
                       <td>Mark</td>
                       <td>Otto</td>
                       <td>@mdo</td>
                       <td>@mdo</td>
                       <td>@mdo</td>
                       <td>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></button>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></button>
                       </td>
                   </tr>
                   <tr>
                       <th scope="row">2</th>
                       <td>Jacob</td>
                       <td>Thornton</td>
                       <td>@fat</td>
                       <td>@fat</td>
                       <td>@mdo</td>
                       <td>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></button>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></button>
                       </td>
                   </tr>
                   <tr>
                       <th scope="row">3</th>
                       <td>Larry</td>
                       <td>the Bird</td>
                       <td>@twitter</td>
                       <td>@twitter</td>
                       <td>@mdo</td>
                       <td>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></button>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                           <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></button>
                       </td>
                   </tr>
                   </tbody>
               </table>

           </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>