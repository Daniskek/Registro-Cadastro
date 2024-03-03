<?php

require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\IOFactory;
use setasign\Fpdi\Tcpdf\Fpdi;

// Verifica se foi enviado um nome via POST
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    // Caminho do arquivo de modelo do Word
    $templatePath = 'Ficha_Cadastral.docx';

    // Caminho para a cópia do documento Word
    $copyPath = 'Ficha_Cadastral_Copia.docx';

    // Carrega o documento Word
    $phpWord = IOFactory::load($templatePath);

    // Substitui o marcador {nome} no documento Word pelo valor enviado via POST
    $phpWord->setValue('nome', $nome);

    // Salva a cópia do documento modificado
    $phpWord->save($copyPath, 'Word2007');

    // Cria uma instância do TCPDF
    $pdf = new Fpdi();
    $pdf->AddPage();

    // Converte o documento Word para PDF usando TCPDF
    $pdf->setSourceFile($copyPath);
    $tplId = $pdf->importPage(1);
    $pdf->useTemplate($tplId, 0, 0, 210);

    // Saída para download
    $downloadFileName = 'Ficha_Cadastral_' . $nome . '.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $downloadFileName . '"');
    echo $pdf->Output('S');

    // Limpa os arquivos temporários
    unlink($copyPath);

} else {
    echo 'Erro: Nenhum nome fornecido.';
}
