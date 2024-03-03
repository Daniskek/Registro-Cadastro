<?php
$cadastros = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter todos os dados do POST
    $dados = $_POST;

    // Abrir o arquivo dados.txt e ler todos os cadastros existentes
    $lines = file("dados.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Obter o próximo ID
    $newId = count($lines) + 1;

    // Adicionar o novo ID aos dados recebidos
    $dados['id'] = $newId;

    // Adicionar a data de cadastro aos dados recebidos
    $dados['dataCadastro'] = date("d-m-Y");

    // Construir manualmente a string de dados no formato desejado
    $novaLinha = $dados['id'] . ',' . $dados['nome'] . ',' . $dados['sexo'] . ',' . $dados['estado_civil'] . ',' . $dados['cpf'] . ',' . $dados['data_nascimento'] . ',' . $dados['estado_nascimento'] . ',' . $dados['nacionalidade'] . ',' . $dados['grau_instrucao'] . ',' . $dados['raca_cor'] . ',' . $dados['nome_mae'] . ',' . $dados['nome_pai'] . ',' . $dados['cep'] . ',' . $dados['cidade_residencia'] . ',' . $dados['bairro'] . ',' . $dados['tipo_logradouro'] . ',' . $dados['logradouro_residencia'] . ',' . $dados['numero_residencia'] . ',' . $dados['complemento_residencia'] . ',' . $dados['numero_pis'] . ',' . $dados['numero_rg'] . ',' . $dados['expedidor_rg'] . ',' . $dados['data_expedicao_rg'] . ',' . $dados['uf_expedicao_rg'] . ',' . $dados['titulo_eleitor'] . ',' . $dados['titulo_eleitor_zona'] . ',' . $dados['titulo_eleitor_secao'] . ',' . $dados['reservista'] . ',' . $dados['ddd_telefone_1'] . ',' . $dados['telefone_1'] . ',' . $dados['ddd_telefone_2'] . ',' . $dados['telefone_2'] . ',' . $dados['email_1'] . ',' . $dados['email_2'] . ',' . $dados['dataCadastro'];

    // Abrir o arquivo dados.txt e adicionar os novos dados com quebra de linha
    file_put_contents("dados.txt", $novaLinha . PHP_EOL, FILE_APPEND);

    // Responder com sucesso
    http_response_code(200);
    echo "Cadastro bem-sucedido";
    exit;
}
?>
