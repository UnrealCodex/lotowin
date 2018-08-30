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

<table id="Tabla_01" width="372" border="1" cellpadding="0" cellspacing="0" nobr="true">
	<tr>
		<td colspan="9">
			<img src="images/mini_01.gif" 36924 alt=""></td>
	</tr>
	<tr>
		<td rowspan="7">
			<img src="images/mini_02.gif" 23567 alt=""></td>
		<td>
			<img src="images/mini_03.gif" 80131 alt=""></td>
		<td colspan="2">
			<img src="images/mini_04.gif" 82131 alt=""></td>
		<td>
			<img src="images/mini_05.gif" 80131 alt=""></td>
		<td colspan="2">
			<img src="images/mini_06.gif" 81131 alt=""></td>
		<td colspan="2" rowspan="5">
			<img src="images/mini_07.gif" 23535 alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/mini_08.gif" 80130 alt=""></td>
		<td>
			<img src="images/mini_09.gif" 81130 alt=""></td>
		<td colspan="2">
			<img src="images/mini_10.gif" 81130 alt=""></td>
		<td colspan="2">
			<img src="images/mini_11.gif" 81130 alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/mini_12.gif" 80131 alt=""></td>
		<td>
			<img src="images/mini_13.gif" 81131 alt=""></td>
		<td colspan="2">
			<img src="images/mini_14.gif" 81131 alt=""></td>
		<td colspan="2">
			<img src="images/mini_15.gif" 81131 alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/mini_16.gif" 80132 alt=""></td>
		<td>
			<img src="images/mini_17.gif" 81132 alt=""></td>
		<td colspan="2">
			<img src="images/mini_18.gif" 81132 alt=""></td>
		<td colspan="2">
			<img src="images/mini_19.gif" 81132 alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/mini_20.gif" 32311 alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="2">
			<img src="images/mini_21.gif" 28632 alt=""></td>
		<td colspan="2">
			<img src="images/mini_22.gif" 4726 alt=""></td>
		<td rowspan="2">
			<img src="images/mini_23.gif" 1332 alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/mini_24.gif" 476 alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/espacio.gif" 231 alt=""></td>
		<td>
			<img src="images/espacio.gif" 801 alt=""></td>
		<td>
			<img src="images/espacio.gif" 811 alt=""></td>
		<td>
			<img src="images/espacio.gif" 11 alt=""></td>
		<td>
			<img src="images/espacio.gif" 801 alt=""></td>
		<td>
			<img src="images/espacio.gif" 441 alt=""></td>
		<td>
			<img src="images/espacio.gif" 371 alt=""></td>
		<td>
			<img src="images/espacio.gif" 101 alt=""></td>
		<td>
			<img src="images/espacio.gif" 131 alt=""></td>
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