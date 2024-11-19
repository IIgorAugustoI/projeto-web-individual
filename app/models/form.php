<?php
session_start();
if (!isset($_SESSION['user'])){
header('location: ../index.php');
exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form method="post">
        <label for="user">Usuário</label>
        <input type="text" name="user" autofocus>
        <input type="submit" value="Enviar">

    </form>
</body>

</html>