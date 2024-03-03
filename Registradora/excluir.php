<?php
session_start();

// Verifica se a sessão está ativa e se as informações de identificação do usuário existem
if (!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
    // Sessão não ativa ou informações de identificação ausentes
    header('Location: logar.php'); // Redireciona para a página de login
    exit;
}
// Verifica se o ID a ser excluído foi fornecido na solicitação
if (isset($_GET['id'])) {
    $idToDelete = $_GET['id'];

    // Lê os dados existentes do arquivo dados.txt
    $file = file("dados.txt");

    // Abre o arquivo dados.txt para escrita
    $fileHandle = fopen("dados.txt", "w");

    // Itera sobre as linhas do arquivo para encontrar e excluir o registro com o ID especificado
    foreach ($file as $line) {
        $data = explode(",", $line);
        $id = trim($data[0]);

        // Se o ID da linha atual não corresponde ao ID a ser excluído, mantém a linha
        if ($id != $idToDelete) {
            fwrite($fileHandle, $line);
        }
    }

    // Fecha o arquivo após a operação de exclusão
    fclose($fileHandle);

    // Redireciona de volta para a página de consulta após a exclusão
    header('Location: consulta.php');
    exit;
}
?>
