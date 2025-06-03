<?php

require_once '../../vendor/autoload.php';
require_once '../../app/models/Mascota.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {

  $mascota = new Mascota();
  $mascotaLists = $mascota->getAll();

  ob_start();
  include_once '../../public/css/estilos-reporte3.html';
  include_once '../contents/content-reporte3.php';
  $content = ob_get_clean();

  $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(20, 15, 15, 15));
  $html2pdf->pdf->SetDisplayMode('fullpage');
  $html2pdf->writeHTML($content);
  $html2pdf->output('example02.pdf');
} catch (Html2PdfException $e) {
  $html2pdf->clean();

  $formatter = new ExceptionFormatter($e);
  echo $formatter->getHtmlMessage();
}