
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
    <div class="corpo-geral">
        <div class="intro">
            <div class="logo-niver">
                <img src="assets/images/LOGO-NIVER.png" alt="">
            </div>
            <div class="texto">
                <p>
                    O <strong> HEMOLAB em 2022 completa 6 ANOS </strong>, em comemoração ao seu aniversário e pensando no bem-estar e cuidado da população irá realizar o 1º  <strong> DESAFIE-SE, PEDAL HEMOLAB </strong>. O evento será aberto para qualquer pessoa que queira desafiar-se, sem limites de idade, ou equipamento.
                </p>
                <p>
                    O ciclismo é um exercício de baixo impacto que traz inúmeros efeitos e benefícios à saúde. Pode ser praticado por pessoa de diversas faixas etárias, e além de ser uma atividade divertida, colabora com o meio ambiente. 
                </p>
            </div>
            <div class="subtitulo">
                <h4>EVENTO DE ENCERRAMENTO SERÁ:</h4>
            </div>
            <div class="rodape-intro">
                <img src="assets/images/FUNDO-1_DATA.png" alt="">
                <img src="assets/images/FUNDO-1_VAMOS.png" alt="">
            </div>
        </div>
        <div class="categoria">
            <div class="logo-desafio">
                <img src="assets/images/LOGO-DESAFIO.png" alt="">
            </div>
            <div class="tipo-categoria">
                <img src="assets/images/FUNDO-2_KM.png" alt="">
            </div>
            <div class="rodape-categoria">
                <img src="assets/images/FUNDO-2.1.png" alt="">
                <div class="texto-rodape">
                    <p>O que não te desafia, <span> não te transforma</span></p>
                </div>
            </div>
        </div>
        <div class="premiacao">
            <div class="logo-desafio">
                <img src="assets/images/LOGO-DESAFIO.png" alt="">
            </div>
            <div class="titulo-premiacao">
                <p>O desafio de pedal iniciará no dia 01/09 até o dia 10/09, com três categorias diferentes:</p>
            </div>
            <div class="categorias">
                <p>> 1ª Categoria - <span>500 km < </span></p>
                <p>> 2ª Categoria - <span>400 km < </span></p>
                <p>> 3ª Categoria - <span>300 km < </span></p>
            </div>
            <div class="texto-premiacao">
                <p>Para participar o ciclista pode utilizar qualquer tipo de bicicleta (Monark, Caloi, Mountain Bike, Houston, Gravel, BMX, Fixa, e etc..), exceto as de modelo com assistência de pedal e elétricas.</p>
            </div>
            <div class="premiacao01">
                <img src="assets/images/FUNDO-3_CAMISA.png" alt="">
                <img style="margin-top: -60px;" src="assets/images/FUNDO-3_MEDALHA.png" alt="">
            </div>
        </div>
        <div class="inscricao">
            <div class="cabecalho-inscricao">
                <img src="assets/images/LOGO-DESAFIO.png" alt="">
            </div>
            <div class="serquilhas">
                <p>INSCRIÇÕES VÁLIDAS DE 01/08 A 20/08</p>
                
            </div>
            <div class="area-form">
                <div class="titulo-form">
                    <p>PARA PARTICIPAR BASTA PREENCHER CORRETAMENTE OS QUADROS ABAIXO:</p>
                </div>
                <form action="finalizada.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" required class="form-control" placeholder="Nome Completo" name="nome">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" required class="form-control" id="whatsapp" placeholder="Whatsapp" name="whatsapp">
                    </div>
                    <div class="input-group mb-3">
                        <select name="categoria" required class="form-control" placeholder="Selecione um estado">
                            <option value="" >Categoria</option>
                            <option value="500">500 km</option>
                            <option value="400">400 km</option>
                            <option value="300">300 km</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-danger" name="inscrever">EU CONSIGO</button>
                    </div>
                </form>
            </div>
            <div class="rodape-inscricao">
                <img src="assets/images/LOGO-NIVER.png" alt="">
                <p>#HemolabNiver6ANOS</p>
            </div>  
        </div>
    </div>  

    <script src="assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script>
        jQuery(function($){
            $("#whatsapp").mask('(00) 00000-0000');
        })
        
    </script>

</body>
</html>