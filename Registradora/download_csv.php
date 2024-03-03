<?php
if (isset($_GET['id'])) {
    $cadastroId = $_GET['id'];

    $file = fopen("dados.txt", "r");

    while (!feof($file)) {
        $line = fgets($file);
        $data = explode(",", $line);

        // Verifique se o ID na linha atual corresponde ao ID na URL
        if (count($data) >= 4 && trim($data[0]) == $cadastroId) {
            $csvContent = '';

            // Mapeia manualmente os dados para as colunas corretas
            $mappedData = array(
                "nome_completo" => $data[1],
                "sexo" => $data[2],
                "estado_civil" => $data[3],
                "cpf" => $data[4],
                "data_nascimento" => $data[5],
                "estado_nascimento" => $data[6],
                "nacionalidade" => $data[7],
                "grau_instrucao" => $data[8],
                "raca_cor" => $data[9],
                "nome_mae" => $data[10],
                "nome_pai" => $data[11],
                "cep" => $data[12],
                "cidade_residencia" => $data[13],
                "bairro" => $data[14],
                "tipo_logradouro" => $data[15],
                "logradouro_residencia" => $data[16],
                "numero_residencia" => $data[17],
                "complemento_residencia" => $data[18],
                "numero_pis" => $data[19],
                "numero_rg" => $data[20],
                "expedidor_rg" => $data[21],
                "data_expedicao_rg" => $data[22],
                "uf_expedicao_rg" => $data[23],
                "titulo_eleitor" => $data[24],
                "titulo_eleitor_zona" => $data[25],
                "titulo_eleitor_secao" => $data[26],
                "reservista" => $data[27],
                "ddd_telefone_1" => $data[28],
                "telefone_1" => $data[29],
                "ddd_telefone_2" => $data[30],
                "telefone_2" => $data[31],
                "email_1" => $data[32],
                "email_2" => $data[33],
            );

            // Adiciona os dados ao CSV
            foreach ($mappedData as $property => $value) {
                $csvContent .= "{$property},{$value}\n";
            }

            $filename = "{$data[1]}_cadastrado.csv"; // Assume que o segundo campo é o nome

            header('Content-Type: text/csv');
            header("Content-Disposition: attachment; filename=\"$filename\"");

            echo $csvContent;
            fclose($file);
            exit;
        }
    }

    fclose($file);
}

// Se o cadastro não for encontrado, redirecione para consulta.php
header('Location: consulta.php');
?>
