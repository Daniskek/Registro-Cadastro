<?php

require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

// Verifica se foi enviado um nome via POST
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    // Caminho do arquivo de modelo do Word .docx
    $templatePath = 'Ficha_Cadastral.docx';

    // Caminho para o novo documento Word .docx
    $outputPath = 'Ficha_Cadastral_Modificado.docx';

    // Copia o arquivo .docx para o novo caminho
    copy($templatePath, $outputPath);

    // Abre o documento Word copiado .docx
    $templateProcessor = new TemplateProcessor($outputPath);

    // Substitui o marcador {nome} no documento Word pelo valor enviado via POST
    $templateProcessor->setValue('nome', $nome);

    // Salva o novo documento modificado
    $templateProcessor->saveAs($outputPath);

    // Retorna o caminho do novo documento para download
    echo json_encode(['path' => $outputPath]);

} else {
    echo json_encode(['error' => 'Erro: Nenhum nome fornecido.']);
}
