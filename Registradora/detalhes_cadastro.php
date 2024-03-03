<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $lines = file("dados.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $data = explode(",", $line);

        if (count($data) >= 4 && $data[0] == $id) {
            // Retorne os detalhes do cadastro como JSON
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        }
    }
}

// Se o ID não for encontrado, retorne um array vazio como JSON
header('Content-Type: application/json');
echo json_encode([]);
?>
