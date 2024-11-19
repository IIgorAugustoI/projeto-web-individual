<?php 
$sql_code = "SELECT 
v.codigo, 
v.placa, 
m.nome AS marca, 
c.descricao AS categoria
FROM 
veiculo v
INNER JOIN marca m ON v.codigoMarca = m.codigo
INNER JOIN categoria c ON v.codigoCategoria = c.codigo
ORDER BY codigo;";
try {
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    echo "<table>";
    echo "<thead>
      <tr>
        <th>Codigo</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Categoria</th>
      </tr>
    </thead>";

    while ($row = $sql_query->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['codigo'] . "</td>";
      echo "<td>" . $row['placa'] . "</td>";
      echo "<td>" . $row['marca'] . "</td>";
      echo "<td>" . $row['categoria'] . "</td>";
      echo "</tr>";
    }
} catch(PDOException $e) {
echo "Erro: ". $e->getMessage();
}
?>

