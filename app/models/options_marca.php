<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (!isset($_SESSION['user'])){
header('location: ../../index.php');
exit;
}

$sql_code = "SELECT nome FROM marca";
try {
    
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);


    echo '<select name="formulario__veiculos_marca" class="categoria__opcoes">';

    while ($row = $sql_query->fetch_assoc()) {
      echo '<option>' . $row["nome"] . '</option>';
    }
    echo '</select>';
} catch(PDOException $e) {
echo "Erro: ". $e->getMessage();
}
?>
