<?php
session_start();
if (!isset($_SESSION['user'])){
header('location: ../index.php');
exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css"  />
    <title>Locadora unipê</title>
    
</head>

<body>
    
    <section>
        <header>
            <h1>Informações da Locadora</h1>
            <p>
              Bem-vindo à locadora unipê! Aqui você pode encontrar informações sobre
              nossos veículos, marcas e categorias. <br> Nossa locadora oferece uma vasta seleção de carros modernos para sua viagem ou trabalho.
                </p>
            </p>
            </header>
            <div class="conte">

                <?php include('models/nav.php'); 
                ?>
                </div>
                <section class="frota-section">
                    <h2>Conheça a Nossa Frota</h2>
                    <p>As melhores condições para você reservar e aproveitar. Escolha o carro perfeito para sua viagem!</p>
            
                    <div class="frota-container">
                        <div class="carro-card">
                            <img src="https://blog.voepass.com.br/wp-content/uploads/2023/09/Capa-O-Chevrolet-Tracker-860x574.jpg" alt="Carro 1">
                            <h3>SUV Conforto</h3>
                            <p>Um SUV espaçoso e confortável para a sua viagem em família.</p>
                            <a href="#" class="btn-reservar">Reservar Agora</a>
                        </div>
                        <div class="carro-card">
                            <img src="https://www.autoo.com.br/fotos/2020/2/1280_960/fiat_toro_2020_1_14022020_24026_1280_960.jpg" alt="Carro 2">
                            <h3>Picape Inovadora </h3>
                            <p>Perfeita para quem deseja robustez e conforto em qualquer terreno.</p>
                            <a href="#" class="btn-reservar">Reservar Agora</a>
                        </div>
                        <div class="carro-card">
                            <img src="https://www.rodorumo.com.br/wp-content/uploads/2015/11/sedan_executivo_corolla.jpg" alt="Carro 3">
                            <h3>Sedan Executivo</h3>
                            <p>Conforto e sofisticação para quem busca uma experiência premium.</p>
                            <a href="#" class="btn-reservar">Reservar Agora</a>
                        </div>
                    </div>
                </section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
    
    

    
</body>
</html>
