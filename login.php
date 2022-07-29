<?php

session_start();
require("conexao.php");
$erro= "";

if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $usuario = filter_input(INPUT_POST, 'usuario');
    $senha = md5(filter_input(INPUT_POST, 'senha'));

    $sql = $db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha");
    $sql->bindValue(':usuario', $usuario);
    $sql->bindValue(':senha', $senha);
    $sql->execute();
  
    if($sql->rowCount()>0){
        $dado = $sql->fetch();

        $_SESSION['idUsuario'] = $dado['id'];
        header("Location:inscricoes.php");

    }else{
        $erro = "<div class='alert alert-danger' role='alert'>
                    CPF ou  Senha Incorreta!
                </div>"; 
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafie-se Pedal</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/assets/images/faviconmanifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="container-fluid login">
            <div class="area-title-login">
                <img src="assets/images/LOGO-NIVER.png" alt="">
            </div>
            <div class="area-login">
                <div class="cabecalho">
                    <img src="assets/images/login.png" class="img-fluid" alt="">
                    <p>Entre com seu Login e Senha</p>
                </div>
                <form action="" method="post">
                    <div class="form-grupo espaco">
                        <label for="usuario">USUÁRIO:</label>
                        <input type="text" required name="usuario" class="form-control" id="usuario">
                    </div>
                    <div class="form-grupo espaco">
                        <label for="senha">SENHA:</label>
                        <input type="password" required name="senha" class="form-control" id="senha">
                    </div>
                    <button type="submit" class="btn btn-primary"> Entrar</button> <br><br>
                    <p class="erro"> <?php  echo $erro;  ?> </p> </p>
                </form> <br> <br>
            </div>
        </div>  
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>