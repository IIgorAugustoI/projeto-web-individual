<?php 
$sql_code = "SELECT nome FROM marca";
try {
    
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);


    echo '<select name="languages" id="lang" class="categoria__opcoes">';

    while ($row = $sql_query->fetch_assoc()) {
      echo '<option>' . $row["nome"] . '</option>';
    }
    echo '</select>';
} catch(PDOException $e) {
echo "Erro: ". $e->getMessage();
}
?>
