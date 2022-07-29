<?php

include('conexao.php');
$resultado = 0;
if(isset($_POST['inscrever']) && !empty(filter_input(INPUT_POST, 'nome')) && !empty(filter_input(INPUT_POST, 'whatsapp')) && !empty(filter_input(INPUT_POST, 'categoria')) ){
    $nome = filter_input(INPUT_POST, 'nome');
    $whatsapp = filter_input(INPUT_POST, 'whatsapp');
    $categoria = filter_input(INPUT_POST, 'categoria');

    $consulta = $db->prepare("SELECT * FROM inscricoes WHERE nome = :nome AND fone = :fone");
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':fone', $whatsapp);
    $consulta->execute();
    if($consulta->rowCount()>0){
        echo "<script>alert('Esse usuário já está cadastrado');</script>";
        echo "<script>window.location.href='index.php'</script>"; 
    }

    $sql = $db->prepare("INSERT INTO inscricoes (nome, fone, categoria) VALUES (:nome, :fone, :categoria)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':fone', $whatsapp);
    $sql->bindValue(':categoria', $categoria);
    
    if($sql->execute()){
        
    }else{
        print_r($sql->errorInfo());
    }
}else{
    echo "<script>alert('Acesso não permitido');</script>";
    echo "<script>window.location.href='index.php'</script>"; 
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafie-se Pedal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    <div class="tela-finalizada">
        <div class="logo-finalizacao">
            <img src="assets/images/inscricao-realizada.png" alt="">
        </div>
        <div class="titulo-finalizacao">
            <h3>INSCRIÇÃO FINALIZADA COM SUCESSO!</h3>
        </div>
        <div class="texto-finalizacao">
            <p>Obrigado, e boa sorte no seu desafio! <br> Não perca nenhum detalhe desse evento, acompanhe tudo e mais um pouco pelo nosso perfil no instagram. </p>
        </div>
        <div class="insta">
            <a href="https://instagram.com/hemolabma?igshid=YmMyMTA2M2Y=">@hemolabma</a>
        </div>
        <div class="rodape-finalizacao">
            <img src="assets/images/LOGO-NIVER.png" alt="">
            <img src="assets/images/LOGO-DESAFIO.png" alt="">
        </div>
    </div>  

    <script src="assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
</body>
</html>