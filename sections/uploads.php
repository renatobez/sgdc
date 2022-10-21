<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>rbsCoud - Tutoriais & Dicas</title>
</head>
<body class="painel">

<!-- criando o navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-painel">

    <h4 class="text-logo">rbs.<span class="text-logo-span">Cloud</span></h4>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <!-- input de pesquisa interna AJAX-->
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
        <a href="downloads.php"><p class="titles-dashboard"><i class="bi bi-cloud-download icons-navbar"></i> &nbsp;Downloads</p></a>
        <a href="uploads.html" style="font-weight: bold"><p class="titles-dashboard"><i class="bi bi-cloud-upload"></i> &nbsp;Upload de material</p></a>
        <a href="settings.php"><p class="titles-dashboard"><i class="bi bi-gear icons-navbar"></i> &nbsp;Configurações</p></a>
    </nav>

    <!-- criando a tela de conteúdo-->
    <div class="content p-2">
        <div class="list-group-item box-content">
           <div class="f-flex">
               <div class="mr-auto p-2">
                    <h3 class="display-4 title-content">Uploads</h3>
               </div>
                    <!-- formulário de upload de arquivos -->
               <form action=""  class="shadow p-3 mb-3 bg-white rounded" style="margin: 20px">
                   <p class="title-forms">Dados do Contribuidor e Conteúdo <br>
                       <span style="color: #18191a">Preencha os dados corretamente</span>

                   </p>
                   <div class="form-row d-flex justify-content-center">
                       <div class="form-group col-md-5">
                           <label for="name"></label>
                           <input type="text" id="name" class="form-control" placeholder="Nome:">
                       </div>

                       <div class="form-group col-md-4">
                           <label for="email"></label>
                           <input type="email" id="email" class="form-control" placeholder="E-mail:">
                       </div>

                       <div class="form-group col-md-2">
                           <label for="tel"></label>
                           <input type="tel" id="tel" class="form-control" placeholder="Contato:">
                       </div>

                       <div class="form-group col-md-5">
                           <label for="titulo"> </label>
                           <input type="text" id="titulo" class="form-control" placeholder="Título:">
                       </div>

                       <div class="form-group col-md-4">
                           <label for="category"> </label>
                           <input type="text" id="category" class="form-control" placeholder="Categoria:">
                       </div>

                       <div class="form-group col-md-2">
                           <label for="data-lancamento"></label>
                           <input type="date" class="form-control" id="data-lancamento">
                       </div>

                       <div class="form-group col-md-5">
                           <label for="autor"></label>
                           <input type="text" class="form-control" id="autor" placeholder="Criador:">
                       </div>

                       <div class="form-group col-md-6 mt-4">
                           <input type="file" class="custom-file-input" id="customFile">
                           <label class="custom-file-label" for="customFile">Procurar arquivo</label>
                       </div>
                   </div>

               </form>

           </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>