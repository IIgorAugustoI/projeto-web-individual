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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="../assets/css/login_cadastro-site.css" />
  </head>

  <body>
    <a class="links" id="paracadastro"></a>

    <form id="cadastro" methood="get" action="../index.html">
      <div class="linha">
        <div class="inputBox">
          <input type="text" required />
          <div class="linha-caixa"></div>
          <label for="">Name</label>
        </div>
      </div>

      <div class="linha">
        <div class="inputBox">
          <input type="email" name="emai" required />
          <div class="linha-caixa"></div>
          <label for="email">Email</label>
        </div>
      </div>

      <div class="linha">
        <div class="inputBox">
          <input type="password" name="password1" required />
          <div class="linha-caixa"></div>
          <label for="password1">Password</label>
        </div>
      </div>

      <div class="linha">
        <div class="inputBox">
          <input type="password" name="password2" required />
          <div class="linha-caixa"></div>
          <label for="password2">Repeat Password</label>
        </div>
      </div>

      <div class="butão">
        <input type="submit" value="cadastrar" />
      </div>

      <div id="abaixo-form">
        <a href="../index.html">Já tem conta?</a>
      </div>
    </form>
  </body>
</html>
