<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #hub-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .hub-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px; /* Define a largura máxima dos botões */
        }

        .hub-buttons button {
            margin: 10px 0;
            padding: 15px;
            width: 100%; /* Faz com que todos os botões tenham a mesma largura */
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .ficha-cadastral-btn { background-color: #3498db; color: #fff; }
        .declaracao-aptidao-legal-btn { background-color: #2ecc71; color: #fff; }
        .declaracao-bens-btn { background-color: #e74c3c; color: #fff; }
        .declaracao-parentesco-btn { background-color: #9b59b6; color: #fff; }
        .declaracao-lom-btn { background-color: #f39c12; color: #fff; }
    </style>
</head>
<body>
    <div id="hub-container">
        <img src="cadastroheader1.png" alt="Câmara de Vereadores" width="150">
        <div class="hub-buttons">
            <button class="ficha-cadastral-btn" onclick="location.href='ficha_cadastral.php'">Ficha Cadastral</button>
            <button class="declaracao-aptidao-legal-btn" onclick="location.href='declaracao_aptidao_legal.html'">Declaração de Aptidão Legal</button>
            <button class="declaracao-bens-btn" onclick="location.href='declaracao_bens.html'">Declaração de Bens</button>
            <button class="declaracao-parentesco-btn" onclick="location.href='declaracao_parentesco.html'">Declaração de Inexistência de Parentesco</button>
            <button class="declaracao-lom-btn" onclick="location.href='declaracao_lom.html'">Declaração LOM (Somente para Vereador)</button>
        </div>
    </div>
</body>
</html>
