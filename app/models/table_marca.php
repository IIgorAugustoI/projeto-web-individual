<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (!isset($_SESSION['user'])){
header('location: ../../index.php');
exit;
}

$sql_code = "SELECT * FROM marca;";
try {
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    echo "<table>";
    echo "<thead>
      <tr>
        <th>Codigo</th>
        <th>Nome</th>
      </tr>
    </thead>";

    while ($row = $sql_query->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['codigo'] . "</td>";
      echo "<td>" . $row['nome'] . "</td>";
      echo "</tr>";
    }
} catch(PDOException $e) {
echo "Erro: ". $e->getMessage();
}
?>

