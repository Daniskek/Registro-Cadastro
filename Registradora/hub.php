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

        .hub-buttons button {
            margin: 10px 0;
            padding: 15px;
            width: 200px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn { background-color: #3498db; color: #fff; }
        .cadastro-btn { background-color: #2ecc71; color: #fff; }
        .declaracoes-btn { background-color: #e74c3c; color: #fff; }
        .em_branco-btn { background-color: #95a5a6; color: #fff; }
    </style>
</head>
<body>
    <div id="hub-container">
        <img src="cadastropessoa.png" alt="Câmara de Vereadores" width="350">
        <div class="hub-buttons">
            <button class="login-btn" onclick="location.href='logar.php'">Login</button>
            <button class="cadastro-btn" onclick="location.href='teste.php'">Cadastro</button>
            <button class="declaracoes-btn" onclick="location.href='declaracao.php'">Declarações</button>
            <button class="em_branco-btn" onclick="location.href='pagina_em_branco.html'">Em Branco</button>
        </div>
    </div>
</body>
</html>
