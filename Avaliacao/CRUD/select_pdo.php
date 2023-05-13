<?php

require_once('dados_banco.php');

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cadastro ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr><th><h4>ID</th><th><h4>Nome </th><th><h4>Documento</th><th><h4>Telefone</th><th><h4>Escola Pública?</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["documento"].  
        "</td><td>".$row["telefone"]."</td><td>".$row["escola"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>