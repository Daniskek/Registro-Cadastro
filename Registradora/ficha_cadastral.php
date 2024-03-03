<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Ficha Cadastral</title>
</head>
<body>
    <h1>Preencha seus dados</h1>
    <form id="formDados">
        <label for="nomeCompleto">Nome Completo:</label>
        <input type="text" id="nomeCompleto" name="nomeCompleto" required>
        <br>
        <button type="button" onclick="gerarPDF()">Gerar</button>
    </form>

    <script>
        function gerarPDF() {
            // Obtém o nome digitado
            var nomeDigitado = document.getElementById('nomeCompleto').value;

            // Envia o nome para o servidor para processamento
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'processar.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Quando a resposta é recebida, cria um link de download para o PDF gerado
                    var link = document.createElement('a');
                    link.href = 'gerado/ficha_cadastral.pdf';
                    link.download = 'Ficha_Cadastral_' + nomeDigitado + '.pdf';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }
            };
            // Envia os dados para o servidor
            xhr.send('nome=' + encodeURIComponent(nomeDigitado));
        }
    </script>
</body>
</html>
