<?php
// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "apelidos_de_gordo");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Inserir novo apelido
if (isset($_POST['novo_apelido'])) {
    $apelido = $_POST['apelido'];
    $sql = "INSERT INTO apelido (apelido) VALUES ('$apelido')";
    $conn->query($sql);
}

// Excluir apelido
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM apelido WHERE id_apelido = $id";
    $conn->query($sql);
}

// Atualizar apelido
if (isset($_POST['atualizar_apelido'])) {
    $id = $_POST['id_apelido'];
    $apelido = $_POST['apelido'];
    $sql = "UPDATE apelido SET apelido = '$apelido' WHERE id_apelido = $id";
    $conn->query($sql);
}

// Consultar todos os apelidos
$sql = "SELECT * FROM apelido";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Apelidos de Gordo</title>
</head>
<body>

<h1>Apelidos de Gordo</h1>

<!-- Formulário para adicionar novo apelido -->
<form action="apelidos.php" method="POST">
    <input type="text" name="apelido" placeholder="Novo Apelido" required>
    <button type="submit" name="novo_apelido">Adicionar Apelido</button>
</form>

<!-- Tabela para exibir os apelidos -->
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Apelido</th>
        <th>Ações</th>
    </tr>

    <!-- Loop para exibir cada apelido na tabela -->
    <?php while ($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?php echo $row['id_apelido']; ?></td>
        <td><?php echo $row['apelido']; ?></td>
        <td>
            <!-- Botão para excluir -->
            <a href="apelidos.php?delete=<?php echo $row['id_apelido']; ?>">Excluir</a>

            <!-- Formulário para atualizar o apelido -->
            <form action="apelidos.php" method="POST" style="display: inline;">
                <input type="hidden" name="id_apelido" value="<?php echo $row['id_apelido']; ?>">
                <input type="text" name="apelido" value="<?php echo $row['apelido']; ?>" required>
                <button type="submit" name="atualizar_apelido">Alterar</button>
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>

<?php
// Fechar a conexão com o banco de dados
$conn->close();
?>
