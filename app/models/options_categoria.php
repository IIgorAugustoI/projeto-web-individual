<?php 
$sql_code = "SELECT descricao from categoria;";
try {
    
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);


    echo '<select name="formulario__veiculos_categoria" class="categoria__opcoes">';

    while ($row = $sql_query->fetch_assoc()) {
      echo '<option>' . $row["descricao"] . '</option>';
    }
    echo '</select>';
} catch(PDOException $e) {
echo "Erro: ". $e->getMessage();
}
?>
