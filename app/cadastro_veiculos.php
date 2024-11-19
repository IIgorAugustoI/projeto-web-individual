<?php
session_start();
if (!isset($_SESSION['user'])){
header('location: ../index.php');
exit;
}
require_once('database/connect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de veículos</title>
    <link rel="stylesheet" href="../assets/css/reset.css" />
    <link rel="stylesheet" href="../assets/css/cadastro-veiculo.css">
  </head>
  <body>
    <div class="container">
      <header class="cabecalho">
        <h1>Cadastro de veículos</h1>
      </header>
      <section class="sessao_forumlario">
        <form method="POST" class="formulario">
          <div class="formulario div__formulario">
            <label for="formulario__veiculos_marca" class="label_form">
              <span>Marca: </span>
            </label>
            <?php require_once('models/options_marca.php') ?>
          </div>

          <div class="formulario div__formulario">
            <label for="formulario__veiculos_categoria" class="label_form">
              <span>Categoria:</span> 
            </label>
              <?php require_once('models/options_categoria.php') ?>
          </div>

          <div class="formulario div__formulario">
            <label for="formulario__veiculos_ano-fabricacao" class="label_form">
              <span>Ano de fabricação: </span>
            </label>
            <input
              type="text"
              name="formulario__veiculos_ano-fabricacao"
              id="formulario__veiculos_ano-fabricacao"
              required
              autocomplete="off"
              class="input_formulario"
            />
          </div>

          <div class="formulario div__formulario">
            <label for="formulario__veiculos_placa" class="label_form">
              Placa do veículo:
            </label>
            <input
              type="text"
              name="formulario__veiculos_placa"
              id="formulario__veiculos_placa"
              required
              autocomplete="off"
              class="input_formulario"
            />
          </div>

          <div class="botao_formulario formulario div__formulario">
            <button type="submit" class="botao botao_enviar"><a href="#">Enviar</a></button>
            <button type="reset" class="botao botao_resetar"><a href="#">Resetar</a></button>
          </div>
        </form>
      </section>
    </div>
  </body>
</html>
