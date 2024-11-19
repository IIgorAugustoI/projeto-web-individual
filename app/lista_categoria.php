<?php
session_start();
require_once("database/connect.php");
if (!isset($_SESSION['user'])){
header('location: ../index.php');
exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/lista_veiculos.css" />
    <title>Locadora de Carros</title>
  </head>
  <body>
    <header>
      <h1>Locadora de Carros</h1>
    </header>
    <?php include('models/nav.php') ?> 
    <section class="listadecarros">
      <h2>Lista de categorias: </h2>
      <?php include('models/table_categoria.php'); ?>
    </section>
  </body>
</html>
