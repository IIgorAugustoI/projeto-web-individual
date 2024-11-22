<?php 
session_start();
if (!isset($_SESSION['user'])){
    header('location: ../index.php');
exit;
}
require_once('../database/connect.php');

$marca = $_POST['formulario__veiculos_marca'];
$categoria = $_POST['formulario__veiculos_categoria'];
$ano_fabricacao = $_POST['formulario__veiculos_ano-fabricacao'];
$placa = $_POST['formulario__veiculos_placa'];

$query_marca = $conn->query("SELECT codigo FROM marca WHERE nome='$marca'") or die("Falha na execução do código SQL: " . $mysqli->error);

$query_categoria = $conn->query("SELECT codigo FROM categoria WHERE descricao='$categoria'") or die("Falha na execução do código SQL: " . $mysqli->error);

try {
    while ($row = $query_marca->fetch_assoc()) { 
        $codigo_marca = $row['codigo'];
    } 
    while ($row = $query_categoria->fetch_assoc()) { 
        $codigo_categoria = $row['codigo'];
    }  
    $insert_placa = "INSERT INTO veiculo (placa, codigoMarca, codigoCategoria) VALUES ('$placa', '$codigo_marca', '$codigo_categoria') "; 

    mysqli_query($conn, $insert_placa);   
    echo "Cadastrado com sucesso!";
}   catch (Exception $e) {  
    echo"". $e->getMessage() ."erro.";
}



# header('Location: ../lista_veiculos.php');
?>

