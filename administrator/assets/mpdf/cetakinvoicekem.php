<?php
include("mpdf.php");
$noinvoice=$_GET['noinvoice'];
$ke=$_GET['ke'];

$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 

$mpdf->SetDisplayMode(90);

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
$url = "http://localhost/pos/form/mpdf/invoicekem.php?noinvoice=$noinvoice&ke=$ke";
 $html = file_get_contents($url);

 $mpdf->WriteHTML($html);
	    
$mpdf->Output();
?>
