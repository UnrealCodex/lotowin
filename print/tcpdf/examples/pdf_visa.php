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
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ClubMexicano');
$pdf->SetTitle('Formulario Visa');
$pdf->SetSubject('TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO.'clubmex.jpg', PDF_HEADER_LOGO_WIDTH.'30', PDF_HEADER_TITLE.'Formulario Visa', PDF_HEADER_STRING.'http://www.clubmexicano.org');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

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

<table  border="1" >
  
  <tr>
   <td align="rigth"><img src="12.jpg"></td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
  </tr>
  <tr>
    <td align="rigth">Estado Civil:</td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
  </tr>
  <tr>
   <td align="rigth">Estado Civil:</td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
  </tr>
    <tr>
   <td align="rigth">Estado Civil:</td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
    </tr>
</table>
	
	<table  border="1" >
  
  <tr>
   <td align="rigth">Estado Civil:</td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
  </tr>
  <tr>
    <td align="rigth">Estado Civil:</td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
  </tr>
  <tr>
   <td align="rigth">Estado Civil:</td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
  </tr>
    <tr>
   <td align="rigth">Estado Civil:</td>
    <td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
	<td align="left"><img src="12.jpg"></td>
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