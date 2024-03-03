<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden; /* Impede o scroll vertical */
            background: url('cadastrofundo.png') fixed;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Azul escuro com 50% de opacidade */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 40px;
            width: 300px;
            color: #fff; /* Cor do texto dentro da área de login */
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px; /* Ajuste a largura conforme necessário */
            height: auto; /* Mantenha a proporção */
        }

        h1 {
            margin-bottom: 20px;
            color: #000; /* Cor do texto do cabeçalho */
        }

        label {
            display: block;
            margin: 10px 0;
            text-align: left;
            color: #000; /* Cor do texto das labels */
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            color: #d9534f;
            margin-top: 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="cadastroheader1.png" alt="Logo">
        </div>
        <h1>Login</h1>
        <form method="post" onsubmit="return validarForm()">
            <label for="usuario">
                <span class="icon">👤</span>Usuário:
            </label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="senha">
                <span class="icon">🔒</span>Senha:
            </label>
            <input type="password" id="senha" name="senha" required>
            
            <button type="submit" name="loginBtn">Entrar</button>
        </form>

        <?php
        session_start();

        if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
            header('Location: consulta.php');
            exit;
        }

        if (isset($_POST['loginBtn'])) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            
            include('dadoslogin.php');
            
            $loginCorreto = false;
            foreach ($usuarios as $id => $dadosLogin) {
                if ($dadosLogin['usuario'] === $usuario && $dadosLogin['senha'] === $senha) {
                    $loginCorreto = true;
                    break;
                }
            }
            
            if ($loginCorreto) {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['senha'] = $senha;
            
                header('Location: consulta.php');
                exit;
            } else {
                // echo "<script>exibirPopupErro();</script>";
                echo '<script>
                        window.onload = function() {
                            exibirPopupErro();
                        }
                      </script>';
            }
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            function exibirPopupErro() {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro de Login',
                    text: 'Usuário ou senha incorretos.',
                    confirmButtonColor: '#007BFF',
                });
            }

            function validarForm() {
                // Adicione validações adicionais, se necessário
                return true;
            }
        </script>
    </div>
</body>
</html>
