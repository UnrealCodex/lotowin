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
$pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM);
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

$html = '
<table id="Tabla_01" width="369" height="592" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="11">
			<img src="images/carta_01.gif" width="369" height="17" alt=""></td>
	</tr>
	<tr>
		<td rowspan="10">
			<img src="images/carta_02.gif" width="17" height="574" alt=""></td>
		<td>
			<img src="images/carta_03.gif" width="81" height="131" alt=""></td>
		<td rowspan="10">
			<img src="images/carta_04.gif" width="3" height="574" alt=""></td>
		<td>
			<img src="images/carta_05.gif" width="82" height="131" alt=""></td>
		<td rowspan="10">
			<img src="images/carta_06.gif" width="3" height="574" alt=""></td>
		<td>
			<img src="images/carta_07.gif" width="81" height="131" alt=""></td>
		<td rowspan="10">
			<img src="images/carta_08.gif" width="3" height="574" alt=""></td>
		<td colspan="2">
			<img src="images/carta_09.gif" width="81" height="131" alt=""></td>
		<td colspan="2" rowspan="8">
			<img src="images/carta_10.gif" width="18" height="542" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/carta_11.gif" width="81" height="4" alt=""></td>
		<td>
			<img src="images/carta_12.gif" width="82" height="4" alt=""></td>
		<td>
			<img src="images/carta_13.gif" width="81" height="4" alt=""></td>
		<td colspan="2">
			<img src="images/carta_14.gif" width="81" height="4" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/carta_15.gif" width="81" height="131" alt=""></td>
		<td>
			<img src="images/carta_16.gif" width="82" height="131" alt=""></td>
		<td>
			<img src="images/carta_17.gif" width="81" height="131" alt=""></td>
		<td colspan="2">
			<img src="images/carta_18.gif" width="81" height="131" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/carta_19.gif" width="81" height="4" alt=""></td>
		<td>
			<img src="images/carta_20.gif" width="82" height="4" alt=""></td>
		<td>
			<img src="images/carta_21.gif" width="81" height="4" alt=""></td>
		<td colspan="2">
			<img src="images/carta_22.gif" width="81" height="4" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/carta_23.gif" width="81" height="131" alt=""></td>
		<td>
			<img src="images/carta_24.gif" width="82" height="131" alt=""></td>
		<td>
			<img src="images/carta_25.gif" width="81" height="131" alt=""></td>
		<td colspan="2">
			<img src="images/carta_26.gif" width="81" height="131" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/carta_27.gif" width="81" height="4" alt=""></td>
		<td>
			<img src="images/carta_28.gif" width="82" height="4" alt=""></td>
		<td>
			<img src="images/carta_29.gif" width="81" height="4" alt=""></td>
		<td colspan="2">
			<img src="images/carta_30.gif" width="81" height="4" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/carta_31.gif" width="81" height="132" alt=""></td>
		<td>
			<img src="images/carta_32.gif" width="82" height="132" alt=""></td>
		<td>
			<img src="images/carta_33.gif" width="81" height="132" alt=""></td>
		<td colspan="2">
			<img src="images/carta_34.gif" width="81" height="132" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/carta_35.gif" width="81" height="37" alt=""></td>
		<td rowspan="3">
			<img src="images/carta_36.gif" width="82" height="37" alt=""></td>
		<td rowspan="3">
			<img src="images/carta_37.gif" width="81" height="37" alt=""></td>
		<td colspan="2">
			<img src="images/carta_38.gif" width="81" height="5" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/carta_39.gif" width="39" height="32" alt=""></td>
		<td colspan="2">
			<img src="images/carta_40.png" width="47" height="26" alt=""></td>
		<td rowspan="2">
			<img src="images/carta_41.gif" width="13" height="32" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/carta_42.gif" width="47" height="6" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/espacio.gif" width="17" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="81" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="3" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="82" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="3" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="81" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="3" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="39" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="42" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="13" height="1" alt=""></td>
	</tr>
</table>'

;

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