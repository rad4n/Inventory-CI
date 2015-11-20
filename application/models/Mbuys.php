<?php
  class Mbuys extends CI_Model{
    public function  get_buys($buys_date){
      $query = $this->db->query("SELECT * FROM aj_supp_transaction a, aj_products b WHERE a.buys_date = '$buys_date' AND a.product_id=b.product_id ORDER BY a.buys_time ASC");
      return $query->result_array();
    }

    public function  get_products(){
      $query = $this->db->query("SELECT * FROM aj_products ORDER BY product ASC");
      return $query->result_array();
    }

    public function  get_buy($trx_id){
      $query = $this->db->query("SELECT * FROM aj_supp_transaction a, aj_products b WHERE a.trx_id = '$trx_id' AND a.product_id=b.product_id ORDER BY a.buys_time ASC");
      return $query->row_array();
    }
    public function add($data,$qty_old_product){
      $supplier	= $data['supplier'];
    	$product	= $data['product'];
    	$price		= $data['harga'];
    	$qty		= $data['qty'];
    	$description= $data['description'];
    	$subtotal	= $price * $qty;
      $buys_date = date('Y-m-d');
      $hour		= date('H:i:s');
      $user = $data['user_id'];
      $sql = "INSERT INTO aj_supp_transaction(supplier_id,product_id,supp_price,supp_qty,subtotal,description,buys_date,buys_time,user_id)
    				VALUES('$supplier','$product','$price','$qty','$subtotal','$description','$buys_date','$hour','$user')";

      $this->db->query($sql);

      $sisa_stok = $qty_old_product['stock'] + $qty;
      $sql2 = "UPDATE aj_products SET stock = '$sisa_stok', po_price = '$price' WHERE product_id = '$product'";
      $this->db->query($sql2);

    }
    public function update($data,$id,$qty_old_product){
      $supplier	= $data['supplier'];
    	$product_id	= $data['product_id'];
    	$price		= $data['harga'];
    	$qty		= $data['qty'];
    	$description= $data['description'];
    	$trx_id		= $data['trx_id'];
    	$buys_qty	= $data['buys_qty'];
    	$subtotal	= $price * $qty;

      $sql = "UPDATE aj_supp_transaction SET supplier_id = '$supplier',
    												supp_price = '$price',
    												supp_qty = '$qty',
    												subtotal = '$subtotal',
    												description = '$description'
    												WHERE trx_id = '$trx_id'";
      $this->db->query($sql);
      $buys_stock = ($qty_old_product - $buys_qty) + $qty;
      $sql2 = "UPDATE aj_products SET stock = '$buys_stock', po_price = '$price' WHERE product_id = '$product'";
      $this->db->query($sql2);

    }
    //jalankan fungsi dibawah ini dengan cron jobs
    public function get_product_disc(){
      $sql = "SELECT supp_qty,
                     trx_id,
                     product_id,
                     supp_price,
                     DATE_ADD(buys_date,INTERVAL 60 DAY) AS datedisc
              FROM aj_supp_transaction
              WHERE disc = 'Y'";
      $result = $this->db->query($sql);
      if($result->num_rows()>0){
        foreach($result->result_array() as $row){
            $price_disc = $row['supp_price'] - (($row['supp_price']*20)/100);

            //update tabel qty_product_disc di table product
            $data = array(
                    'price'            => $price_disc,
                    'qty_product_disc' => $row['supp_qty']
            );

            $this->db->where('product_id', $row['product_id']);
            $this->db->update('aj_products', $data);

            $data2 = array(
                    'disc'  => "Y"
            );

            $this->db->where('trx_id', $row['trx_id']);
            $this->db->update('aj_products', $data2);
        }
      }
    }
  }
