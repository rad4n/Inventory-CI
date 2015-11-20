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

$pdf->addText (220, 820, 16,'<b>Laporan Penjualan</b>');
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

$sql_report = mysql_query("SELECT * FROM aj_sales_transaction a, aj_products b, aj_categories c WHERE a.sales_date BETWEEN '$start_date' AND '$end_date' AND a.product_id=b.product_id AND b.category_id=c.category_id ORDER BY a.sales_date,a.sales_time ASC");
$i = 1;
while ($data_report = mysql_fetch_array($sql_report)){
	$sales_date	 = tgl_indo($data_report[sales_date]);
	$sales_price = format_rupiah($data_report[sales_price]);
	$po_price	 = format_rupiah($data_report[po_price]);
	$profit		 = format_rupiah($data_report[profit]);
	$subtotal	 = format_rupiah($data_report[subtotal]);
	
	$total_price += $data_report[sales_price];
	$totalprice = format_rupiah($total_price);
	
	$po_pri += $data_report[po_price];
	$popri = format_rupiah($po_pri);
	
	$pro_f += $data_report[profit];
	$pro = format_rupiah($pro_f);
	
	$persepuluhan = $pro_f * 0.1;
	$sepuluh = format_rupiah($persepuluhan);
	
	$untung = ($pro_f - $persepuluhan) - 2500000;
	$untung_bersih = format_rupiah($untung); 
	
	$sub += $data_report[subtotal];
	$subtota = format_rupiah($sub);
	
	$datareport[$i] = array('No' => $i,
							'Tanggal' => $sales_date,
							'Nama Produk' => $data_report[product],
							'Harga Satuan' => $sales_price,
							'Qty' => $data_report[sales_qty],
							'Subtotal' => $subtotal,
							'Untung' => $profit);
	$i++;
}

$pdf->ezTable ($datareport, '', '', '');
$pdf->ezText ("\n\nTotal keseluruhan : Rp. $subtota");
$pdf->ezText ("Total keuntungan : Rp. $pro");

$pdf->ezText ("\nPersepuluhan : Rp. $sepuluh");
$pdf->ezText ("Beban Toko : Rp. 2.500.000");

$pdf->ezText ("Untung Bersih : <b>Rp. $untung_bersih</b>");
$pdf->ezText ("Periode Laporan Penjualan : $date_indo s/d $date_in");

$pdf->ezStartPageNumbers (320, 15, 8);
$pdf->ezStream();

?>