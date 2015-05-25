<?php
    ob_start();
   // include(dirname(__FILE__).'/pdf_convert/pdf_header_joborder_serviceOut.php');
    include(dirname(__FILE__).'/pdf/pdf_header.php');
    include(dirname(__FILE__).'/pdf/invoice_details.php');
    $content = ob_get_clean();

    // convert to PDF
    //require_once(dirname(__FILE__).'/third_party/html2pdf.class.php');
    require_once(APPPATH.'third_party/html2pdf.class.php');
    try
    {
        ////$html2pdf = new HTML2PDF('P', 'A4', 'en');
        $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', 8);
        $html2pdf->pdf->SetDisplayMode('fullpage');
    //      $html2pdf->pdf->SetProtection(array('print'), 'spipu');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));

        $html2pdf->Output('invoice.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>
