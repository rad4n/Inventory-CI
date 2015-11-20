<?php
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("dbasfa_jaya");
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";
include "function/class.ezpdf.php";
include "function/fungsi_rupiah.php";
include "function/fungsi_indotgl.php";

$smarty = new Smarty;

$module = $_GET['module'];
$user_id = $_COOKIE['user_id'];

$pdf = new Cezpdf();

$pdf->ezSetCmMargins (3, 3, 3, 3);
$pdf->selectFont ('fonts/Times-Roman.afm');

$all = $pdf->openObject();

$pdf->setStrokeColor (0, 0, 0, 1);
$pdf->addJpegFromFile('img/logo.jpg',20,800,69);

$pdf->addText (210, 820, 16,'<b>Laporan Stok Produk</b>');
$pdf->addText (245, 800, 14,'<b>ASFA JAYA</b>');
$pdf->addText (75, 780, 8,'Jl. Ki Hajar Dewantara No. 132 Arjawinangun, Cirebon, Telp. (0231) 358630, Hp. 08562121141, Email: takehikoboyz@gmail.com');

$pdf->line (10, 775, 578, 775);
$pdf->line (10, 50, 578, 50);
$pdf->addText (535, 764, 8);

$pdf->addText (30, 34,8,'Dicetak tgl:' . date('d-m-Y') .", ". date('G:i:s',time()));

$pdf->closeObject();
$pdf->addObject ($all, 'all');

$start_date = $_GET['start_date'];
$end_date	= $_GET['end_date'];

$date_indo = tgl_indo($start_date);
$date_in = tgl_indo($end_date);

$sql_report = mysql_query("SELECT * FROM aj_products a, aj_categories b, aj_suppliers c WHERE a.category_id=b.category_id AND a.supplier_id=c.supplier_id ORDER BY a.product ASC");
$i = 1;
while ($data_product = mysql_fetch_array($sql_report)){
	$price = format_rupiah($data_product[price]);
	$po_price = format_rupiah($data_product[po_price]);
	$pm_price = format_rupiah($data_product[pm_price]);
	
	$dataproduct[] = array(	'No' => $i,
							'Kategori' => $data_product[category],
							'Nama Produk' => $data_product[product],
							'Stok' => $data_product[stock],
							'Harga Jual' => $price,
							'Modal' => $po_price,
							'Harga PM' => $pm_price);
	$qtyomset = $data_product[stock] * $data_product[po_price];
	$modalomset += $qtyomset;
	$pmqomset = $data_product[stock] * $data_product[pm_price];
	$pmomset += $pmqomset;
	$promset = $data_product[stock] * $data_product[price];
	$priceomset += $promset;		
	$i++;
}
$modalom = format_rupiah($modalomset);
$pmomset = format_rupiah($pmomset);
$priomset = format_rupiah($priceomset);

$pdf->ezTable ($dataproduct, '', '', '');
$pdf->ezText ("\n\nTotal Omset Modal keseluruhan : Rp. $modalom");
$pdf->ezText ("Total Omset Kotor : Rp. $priomset");

$pdf->ezText ("\nTotal Omset Bersih : Rp. $pmomset");

$pdf->ezStartPageNumbers (320, 15, 8);
$pdf->ezStream();

?>