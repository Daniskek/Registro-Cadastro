<?php
session_start();

// Verifica se a sessão está ativa e se as informações de identificação do usuário existem
if (!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
    // Sessão não ativa ou informações de identificação ausentes
    header('Location: logar.php'); // Redireciona para a página de login
    exit;
}

// Verifica se o ID do registro a ser editado foi passado na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Abre o arquivo de dados para leitura
    $file = fopen("dados.txt", "r");

    // Inicializa um array associativo para armazenar todos os dados do registro
    $dataFields = [];

    while (!feof($file)) {
        $line = fgets($file);
        $data = explode(",", $line);

        if (count($data) >= 13 && $id == trim($data[0])) {
            // Construa um array associativo com todos os dados do registro
            $dataFields = [
                'id' => trim($data[0]),
                'nome' => trim($data[1]),
                'cpf' => trim($data[2]),
                'dataNascimento' => trim($data[3]),
                'pis' => trim($data[4]),
                'estado' => trim($data[5]),
                'cidade' => trim($data[6]),
                'departamento' => trim($data[7]),
                'centroCusto' => trim($data[8]),
                'cargo' => trim($data[9]),
                'numeroFolha' => trim($data[10]),
                'email' => trim($data[11]),
                'senha' => trim($data[12]),
            ];
            break; // Encontramos o registro, não é necessário continuar lendo
        }
    }

    fclose($file);
} else {
    // Se o ID não foi fornecido, redirecione para a página de consulta
    header('Location: consulta.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
</head>
<body>
    <div style="text-align: right; margin-top: 10px;">
        <a href="logout.php">Sair</a>
    </div>
    <h1>Editar Registro</h1>
    <form id="editarForm" action="salvar_edicao.php" method="post">
        <!-- Itera através do array associativo para criar inputs para cada campo -->
        <?php foreach ($dataFields as $field => $value) : ?>
            <label for="<?php echo $field; ?>"><?php echo ucfirst($field); ?>:</label>
            <input type="text" id="<?php echo $field; ?>" name="<?php echo $field; ?>" value="<?php echo $value; ?>" required><br><br>
        <?php endforeach; ?>

        <button type="submit" id="salvarBtn">Salvar</button>
    </form>
</body>
</html>
