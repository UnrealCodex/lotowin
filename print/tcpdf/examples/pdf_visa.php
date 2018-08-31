<?php
//$conexion=mysql_connect("localhost","mmigrant_nuevo_a","789poiQWE,.-") or die("Problemas en la conexion");
//mysql_select_db("mmigrant_basedatos",$conexion) or die("Problemas en la seleccion de la base de datos");
//$registros=mysql_query("select * from visa where int_fol = $_REQUEST[int_fol]" , $conexion) or die("Problemas en el select:".mysql_error());

//$reg=mysql_fetch_array($registros) ;

//$int_fol = $reg[int_fol];

//============================================================+
// File name : example_001.php
// Begin : 2008-03-04
// Last Update : 2010-08-14
//
// Description : Example 001 for TCPDF class
// Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
// Nicola Asuni
// Tecnick.com s.r.l.
// Via Della Pace, 11
// 09044 Quartucciu (CA)
// ITALY
// www.tecnick.com
// info@tecnick.com
//============================================================+

/**
* Creates an example PDF TEST document using TCPDF
* @package com.tecnick.tcpdf
* @abstract TCPDF - Example: Default Header and Footer
* @author Nicola Asuni
* @since 2008-03-04
*/

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, false, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('CaoX');
$pdf->SetTitle('Loto Win');
$pdf->SetSubject('TCPDF');
$pdf->SetKeywords('loteria , personal');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO.'clubmex.jpg', PDF_HEADER_LOGO_WIDTH.'30', PDF_HEADER_TITLE.'Formulario Visa', PDF_HEADER_STRING.'http://www.clubmexicano.org');

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//$pdf->SetAutoPageBreak(false, 0);
//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// Set some content to print

$html = <<<EOD

<table border="1" style="color: #000000">
   <tr>
      <td width="100%" colspan="4">
         <table border="0">
            <tr>
               <!-- This should work -->
               <td width="18%" style="border-right-width:0.1px;">Test 1</td>
               <td width="12%">Test 2</td>
               <td width="20%">Test 3</td>
            </tr>
            <tr>
               <!-- As should this -->
               <td width="18%" style="border-right:0.1px solid black;">Test 4</td>
               <td width="12%">Test 5</td>
               <td width="20%">Test 6</td>
            </tr>
            <tr>
               <!-- However, this does not. -->
               <td width="18%" style="border-right:0.1px">Test Broken</td>
               <td width="12%">Test :)</td>
               <td width="20%">Test :)</td>
            </tr>                
         </table>
      </td>
   </tr>
</table>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>