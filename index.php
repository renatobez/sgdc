
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <title>SGDC - Sistema de Gerenciamento e Dados de Chromebook</title>
    </head>
<body>
<!-- criando box bootstrap-->
<div class="container-fluid">
        <div class="row d-flex align-self-center" style="margin-top: 5%;">
            <div class="col-12">
                <!-- box login -->
                <div class="card p-3" style="width: 450px; margin: auto">
                    <div class="card-body">
                        <img class="logo-login my-1" src="img/logo-login2.png" alt="">
                        <p class="card-title text-center mt-3"> Use seu e-mail institucional para entrar</p>
                        <!-- formulário de acesso -->
                        <form action="./sections/painel.php" method="post">
                            <div class="form-group">
                                <input type="text" id="email" class="form-control my-2" placeholder="email:">
                                <input type="password" class="form-control my-2" id="password" placeholder="senha:">
                                <button type="submit" class="btn btn-block btn-login"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
                            </div>
                        </form>

                        <?php
                            //recebendo dados do login
                            $email = $_POST["email"];
                            $password = $_POST["password"];

                            var_dump([
                                    $email,
                                $password
                            ]);
                        ?>

                    </div>
                </img>
            </div>
        </div>
    </div>
    <p class="powered">feito com muito ☕ e dedicação por <strong>rbsdev <i class="bi bi-github"></i></strong></p>
 </div>
 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
 </body>
 </html>

