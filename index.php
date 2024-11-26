<?php

require_once('app/database/connect.php');

if(isset($_POST['user']) || isset($_POST['senha'])){
  $usuario = $conn->real_escape_string($_POST['user']);
  $senha = sha1($_POST['senha']);
  $sql_code = "SELECT * FROM `usuario`  WHERE nome = '$usuario' AND senha = '$senha'";
  $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
  
  $quantidade = $sql_query->num_rows;
  if($quantidade == 1) {
    session_start();

    $usuario = $sql_query->fetch_assoc();
    
    $_SESSION['user'] = $usuario['nome'];
    header('Location: app/principal.php');
  } else {
      echo '<div class="usuario-invalido"><p>Falha ao logar! E-mail ou senha incorretos. <p/><div/>';

  }
    
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login_cadastro-site.css" />
  </head>
  <body>
    
    <a class="links" id="paralogin"></a>
    <form form action="" method="POST" id="login">
      <h1>Login</h1>

      <div class="linha">
        <div class="inputBox">
        <input type="text" name="user" required>
          <div class="linha-caixa"></div>
          <label for="user">Usuário:</label>
          
        </div>
      </div>

      <div class="linha">
        <div class="inputBox">
          <input type="password" name="senha" required>
          <div class="linha-caixa"></div>
          <label for="senha" >Senha</label>
          
        </div>
      </div>

      <div id="check-box">
        <input
          type="checkbox"
          id="manter-conect"
          name="manter-conect"
          value=""
        />
        <label for="manter-conect">Manter-se conectado</label><br />
      </div>

      <div class="botao">
        <button type="submit">Entrar</button>
      </div>

      <div id="abaixo-form">
        <a href="src/cadastro_conta.html">Esqueceu a senha?</a>
      </div>
    </form>
  </body>
</html>
