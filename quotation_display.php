<?php
require('viewpdf.php');
 //require("fpdf/fpdf.php");

$pdf=new PDF_ViewPref();
 //$pd = new FPDF();
$pdf->SetDisplayMode('fullpage');
$pdf->DisplayPreferences('HideMenubar,HideToolbar,HideWindowUI');
$pdf->AddPage();



    $pdf->Image('sngcelogo.jpeg', 10, 5, -700);
    $pdf->Ln(10);

 
    $pdf->SetFont('arial','',12);
    $pdf->Cell(0,12,"TENDER DETAILS",1,1,'C');





    $pdf->Cell(50,10,"Document No:",1,0);
    $pdf->Cell(20,10,"Name",1,0);
    $pdf->Ln(10);


    $pdf->write(15,"TENDER DETAILS");


$pdf->Output();

?>