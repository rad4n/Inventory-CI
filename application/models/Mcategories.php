<?php
  class Mcategories extends CI_Model{
    public function  get_categories(){
      $query = $this->db->query("SELECT * FROM aj_categories");
      return $query->result_array();
    }

    public function  get_categorie($id){
      $query = $this->db->query("SELECT * FROM aj_categories WHERE category_id='$id'");
      return $query->row_array();
    }
    public function add($data){
      $name	= $data['nama'];
    	$active	= $data['aktif'];
    	$createdDate = date('Y-m-d H:i:s');
      $user_id = $data['user_id'];

       $sql = "INSERT INTO aj_categories (category,active,created_user,created_date,modified_user,modified_date)
     				VALUES('$name','$active','$user_id','$createdDate','','')";

      $this->db->query($sql);
    }
    public function update($data,$id){
      $id		= $data['category_id'];
    	$category = $data['nama'];
    	$aktif	= $data['aktif'];
      $user_id = $data['user_id'];
        $sql = "UPDATE aj_categories SET 	category = '$category',
      											active	 = '$aktif',
      											modified_user = '$user_id',
      											modified_date = '$date'
      											WHERE category_id = '$id'";
      $this->db->query($sql);
    }
  }
