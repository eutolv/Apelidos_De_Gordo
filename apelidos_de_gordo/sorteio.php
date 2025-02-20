<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apelidos_de_gordo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT apelido FROM apelido ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['apelido'];  // Apenas retornamos o apelido sorteado
} else {
    echo "Nenhuma informação encontrada";
}

$conn->close();
?>
