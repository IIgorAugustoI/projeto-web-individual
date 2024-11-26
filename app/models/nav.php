<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (!isset($_SESSION['user'])){
header('location: ../../index.php');
exit;
}
echo '
<link rel="stylesheet" href="../assets/css/nav.css" type="text/css"  />
<nav class="nav">
                  <ul class="alin">
                    <li><a href="principal.php">Home</a></li>
                    <li><a href="lista_veiculos.php">Veículos</a></li>
                    <li><a href="lista_marca.php">Marcas</a></li>
                    <li><a href="lista_categoria.php">Categoria</a></li>
                    <li><a href="logout.php">Sair</a></li>
                  </ul>
</nav>
';
?>
