<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apelidos de Gordo</title>
    <link rel="stylesheet" href="apelido.css"> <!-- Conectando o arquivo CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Carregar jQuery -->
</head>
<body>

<div class="conteudo">
    <!-- Botão para sortear a informação -->
    <button id="sortear">Sorteie o Apelido</button>

    <!-- Exibindo a informação sorteada -->
    <div>
        <p id="apelidoTexto"></p>
    </div>
</div>

<!-- Estrelas caindo -->
<div class="starfall">
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
    <div class="falling-star"></div>
</div>

<script>
    $(document).ready(function() {
        $('#sortear').click(function() {
            // Envia a requisição AJAX para sortear o apelido
            $.ajax({
                url: 'sorteio.php', // arquivo PHP que irá processar o sorteio
                method: 'GET',
                success: function(response) {
                    // Atualiza o conteúdo da página com o apelido sorteado
                    $('#apelidoTexto').text(response);
                },
                error: function() {
                    // Em caso de erro, exibe uma mensagem
                    $('#apelidoTexto').text("Ocorreu um erro ao sortear o apelido.");
                }
            });
        });
    });
</script>
</body>
</html>
