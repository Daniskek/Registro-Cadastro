<?php
session_start();

// Verifica se a sessão está ativa e se as informações de identificação do usuário existem
if (!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
    // Sessão não ativa ou informações de identificação ausentes
    header('Location: logar.php'); // Redireciona para a página de login
    exit;
}

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $dataNascimento = $_POST['dataNascimento'];
    $pis = $_POST['pis'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $departamento = $_POST['departamento'];
    $centroCusto = $_POST['centroCusto'];
    $cargo = $_POST['cargo'];
    $numeroFolha = $_POST['numeroFolha'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Abre o arquivo de dados para leitura e gravação
    $file = fopen("dados.txt", "r+");

    // Verifica se o arquivo foi aberto com sucesso
    if ($file) {
        // Inicializa uma variável para armazenar os novos dados
        $novosDados = "";

        // Percorre o arquivo e atualiza o registro correspondente
        while (!feof($file)) {
            $line = fgets($file);
            $data = explode(",", $line);

            if (count($data) >= 13 && $id == trim($data[0])) {
                // Atualiza os dados do registro
                $line = "$id,$nome,$cpf,$dataNascimento,$pis,$estado,$cidade,$departamento,$centroCusto,$cargo,$numeroFolha,$email,$senha\n";
            }

            $novosDados .= $line;
        }

        // Volta ao início do arquivo para reescrever os dados
        fseek($file, 0);
        fwrite($file, $novosDados);

        // Fecha o arquivo
        fclose($file);

        // Redireciona de volta para a página de consulta após a edição
        header('Location: consulta.php');
        exit;
    } else {
        // Se houver um erro ao abrir o arquivo, exiba uma mensagem de erro
        echo "Erro ao abrir o arquivo.";
        exit;
    }
} else {
    // Se o formulário não foi enviado via POST, redireciona para a página de consulta
    header('Location: consulta.php');
    exit;
}
?>
