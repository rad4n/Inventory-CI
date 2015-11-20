<?php
  class Msuppliers extends CI_Model{
    public function  get_suppliers(){
      $query = $this->db->query("SELECT * FROM aj_suppliers");
      return $query->result_array();
    }

    public function  get_supplier($id){
      $query = $this->db->query("SELECT * FROM aj_suppliers WHERE supplier_id='{$id}'");
      return $query->row_array();
    }
    public function add($data){
      $name	= $_POST['nama'];
      $address= $_POST['alamat'];
      $phone	= $_POST['phone'];
      $active	= $_POST['aktif'];
      $description = $_POST['description'];
      $createdDate = date('Y-m-d H:i:s');

       $sql = "INSERT INTO aj_suppliers (supplier,address,phone,active,description,created_user,created_date,modified_user,modified_date)
     				VALUES('$name','$address','$phone','$active','$description','$user_id','$createdDate','','')";

      $this->db->query($sql);
    }
    public function update($data,$id){
      $supplier       = $data['nama'];
    	$address 	      = $data['alamat'];
    	$phone		      = $data['phone'];
    	$description		= $data['description'];
    	$aktif		      = $data['aktif'];
      $user_id        = $data['user_id'];
    	$date= date('Y-m-d H:i:s');

        $sql = "UPDATE aj_suppliers SET 	supplier = '$supplier',
      											address	 = '$address',
      											phone	 = '$phone',
      											description = '$description',
      											active	 = '$aktif',
      											modified_user = '$user_id',
      											modified_date = '$date'
      											WHERE supplier_id = '$id'";

      $this->db->query($sql);

    }
  }
