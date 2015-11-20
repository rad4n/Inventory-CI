<?php
error_reporting(0);
$page = "searchs";
require('libs/Smarty.class.php');
include "function/class_database.php";
include "function/serverconfig.php";
include "function/debug.php";
include "function/fungsi_rupiah.php";

$smarty = new Smarty;

$product = $_GET['product'];


$sql = mysql_query("SELECT * FROM aj_products a, aj_categories b, aj_suppliers c WHERE a.product LIKE '%$product%' AND a.category_id=b.category_id AND a.supplier_id=c.supplier_id ORDER BY a.product ASC");
$i = 1;
while ($data_product = mysql_fetch_array($sql)){
	$price = format_rupiah($data_product[price]);
	$po_price = format_rupiah($data_product[po_price]);
	$pm_price = format_rupiah($data_product[pm_price]);
	
	$dataproduct[] = array(	'product_id' => $data_product[product_id],
							'category' => $data_product[category],
							'category_id' => $data_product[category_id],
							'supplier_id' => $data_product[supplier_id],
							'product' => $data_product[product],
							'stock' => $data_product[stock],
							'price' => $price,
							'po_price' => $po_price,
							'pm_price' => $pm_price,
							'no' => $i);
	$i++;
}
	
$smarty->assign('dataproduct', $dataproduct);

$smarty->assign('content', $page);
$smarty->display('index.tpl')

?>