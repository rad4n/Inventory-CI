<?php
  class Mproducts extends CI_Model{
    public function  get_products(){
      $query = $this->db->query("SELECT * FROM aj_products a, aj_categories b, aj_suppliers c WHERE a.category_id=b.category_id AND a.supplier_id=c.supplier_id ORDER BY a.product ASC");
      return $query->result_array();
    }

    public function  get_product($id){
      $query = $this->db->query("SELECT * FROM aj_products WHERE product_id = '$id'");
      return $query->row_array();
    }

    public function add($data){
    	$category	     = $data['category'];
    	$supplier	     = $data['supplier'];
    	$name		       = $data['nama'];
    	$price		     = $data['harga'];
    	$po_price	     = $data['harga_po'];
    	$pm_price	     = $data['harga_pm'];
    	$stock		     = $data['stok'];
    	$description   = $data['description'];
    	$active		     = $data['aktif'];
    	$createdDate   = date('Y-m-d H:i:s');
      $user_id       = $data['user_id'];

    $sql = "INSERT INTO aj_products (category_id,supplier_id,product,price,po_price,pm_price,stock,active,description,created_user,created_date,modified_user,modified_date)
  				VALUES('$category','$supplier','$name','$price','$po_price','$pm_price','$stock','$active','$description','$user_id','$createdDate','','')";

      $this->db->query($sql);
    }

    public function update($data,$id){
      $productid 	   = $data['productid'];
    	$category	     = $data['category'];
    	$supplier	     = $data['supplier'];
    	$name		       = $data['nama'];
    	$price		     = $data['harga'];
    	$po_price	     = $data['harga_po'];
    	$pm_price	     = $data['harga_pm'];
    	$stock		     = $data['stok'];
    	$description   = $data['description'];
    	$active		     = $data['aktif'];
    	$modified_date = date('Y-m-d H:i:s');
      $user_id       = $data['user_id'];

      $sql = "UPDATE aj_products SET category_id = '$category',
    										supplier_id = '$supplier',
    										product		= '$name',
    										price		= '$price',
    										po_price	= '$po_price',
    										pm_price	= '$pm_price',
    										stock		= '$stock',
    										active		= '$active',
    										description	= '$description',
    										modified_user = '$user_id',
    										modified_date = '$modified_date'
    										WHERE product_id = '$productid'";

      $this->db->query($sql);
    }
  }
