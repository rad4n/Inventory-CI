<?php
  class Msales extends CI_Model{
    public function  get_sales($sales_date){
      $query = $this->db->query("SELECT * FROM aj_sales_transaction a, aj_products b, aj_categories c WHERE a.sales_date = '$sales_date' AND a.product_id=b.product_id AND b.category_id=c.category_id ORDER BY a.sales_time ASC");
      return $query->result_array();
    }

    public function  get_products(){
      $query = $this->db->query("SELECT * FROM aj_products ORDER BY product ASC");
      return $query->result_array();
    }

    public function  get_trx($id){
      $query = $this->db->query("SELECT a.description, a.sales_qty, a.sales_price, a.sales_stock, b.product, b.product_id FROM aj_sales_transaction a,aj_products b WHERE a.trx_id = '$id' AND a.product_id=b.product_id");
      return $query->row_array();
    }

    private function cek_stock($product){
      	$sql 	= "SELECT * FROM aj_products WHERE product_id = '$product'";
        $data = $this->db->query($sql)->row_array();
        //$stock = $data['stock'];
        return $data;
    }

    public function add($data){
      $product	= $data['product'];
    	$price		= $data['harga'];
    	$qty		= $data['qty'];
    	$description= $data['description'];
      $stock = $this->cek_stock($product);
      //print_r($stock); exit;
      $subtotal= $price * $qty;
      $profit	= ($price * $qty) - ($stock['po_price'] * $qty);
      $sales_stock = $stock['stock'] - $qty;
      $sales_date = date('Y-m-d');
      $hour		= date('H:i:s');
      if($stock['stock'] == 0){
        return false;
      }
      else {
       $sql = "INSERT INTO aj_sales_transaction (	product_id,
   														sales_price,
   														profit,
   														sales_qty,
   														sales_stock,
   														subtotal,
   														sales_date,
   														sales_time,
   														description,
   														user_id)
   												VALUES(	'$product',
   														'$price',
   														'$profit',
   														'$qty',
   														'$sales_stock',
   														'$subtotal',
   														'$sales_date',
   														'$hour',
   														'$description',
   														'')";
      $this->db->query($sql);
      }
    }
    public function update($data,$id){
      $product_id	= $data['product_id'];
    	$price		= $data['harga'];
    	$qty		= $data['qty'];
    	$sales_qty	= $data['sales_qty'];
    	$description= $data['description'];
    	$trx_id		= $data['trx_id'];
    	$stock		= $data['stock'];

    	$get_product = $this->cek_stock($product_id);
    	$subtotal = $price * $qty;
    	$profit	= ($price * $qty) - ($get_product['po_price'] * $qty);
    	$sales_stock = ($stock + $sales_qty) - $qty;


        $sql = "UPDATE aj_sales_transaction SET	sales_price = '$price',
      													profit	= '$profit',
      													sales_qty = '$qty',
      													sales_stock = '$sales_stock',
      													subtotal	= '$subtotal',
      													description = '$description'
      													WHERE trx_id = '$trx_id'";

      $this->db->query($sql);

      $sql2 = "UPDATE aj_products SET stock = '$sales_stock' WHERE product_id = '$product_id'";

    $this->db->query($sql2);
    }
  }
