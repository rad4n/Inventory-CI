<?php
  class Muser extends CI_Model{
    public function  get_users(){
      $query = $this->db->query("SELECT aj_employes.nik,aj_employes.name,aj_users.level,aj_users.username,aj_employes.employe_id FROM aj_employes,aj_users WHERE aj_users.level != 'Administrator' AND aj_employes.nik=aj_users.nik");
      return $query->result_array();
    }

    public function  get_user($id){
      $query = $this->db->query("SELECT aj_employes.*, aj_users.* FROM aj_employes,aj_users WHERE aj_employes.employe_id = '$id' AND aj_employes.nik=aj_users.nik");
      return $query->row_array();
    }
    public function add($data){
      $nik		  = $data['nik'];
      $user_id  = $data['user_id'];
    	$name 		= $data['nama'];
    	$address 	= $data['alamat'];
    	$phone		= $data['phone'];
    	$email		= $data['email'];
    	$level		= $data['level'];
    	$username	= $data['username'];
    	$password	= md5($data['password']);
    	$photo_fix_name = $data['photo_fix_name'];
    	$createdDate= date('Y-m-d H:i:s');

      //bila ada foto
      if (!empty($photo_fix_name)){ $sql = "INSERT INTO aj_employes (nik,name,address,phone,email,photo,created_user,created_date)
                VALUES (
                          ".$this->db->escape($nik).",
                          ".$this->db->escape($name).",
                          ".$this->db->escape($address).",
                          ".$this->db->escape($phone).",
                          ".$this->db->escape($email).",
                          ".$this->db->escape($photo_fix_name).",
                          ".$this->db->escape($user_id).",
                          ".$this->db->escape($createdDate)."
                        )";
    	}
    	else{ $sql = "INSERT INTO aj_employes (nik,name,address,phone,email,created_user,created_date)
                VALUES (
                          ".$this->db->escape($nik).",
                          ".$this->db->escape($name).",
                          ".$this->db->escape($address).",
                          ".$this->db->escape($phone).",
                          ".$this->db->escape($email).",
                          ".$this->db->escape($user_id).",
                          ".$this->db->escape($createdDate)."
                        )";
    	}
      $this->db->query($sql);

      $sql2 = "INSERT INTO aj_users (username,passwd,nik,level)
                VALUES (
                          ".$this->db->escape($username).",
                          ".$this->db->escape($password).",
                          ".$this->db->escape($nik).",
                          ".$this->db->escape($level)."
                       )";
      $this->db->query($sql2);
    }
    public function update($data,$id){
      $nik		  = $data['nik'];
      $user_id  = $data['user_id'];
    	$name 		= $data['nama'];
    	$address 	= $data['alamat'];
    	$phone		= $data['phone'];
    	$email		= $data['email'];
    	$level		= $data['level'];
    	$photo_fix_name = $data['photo_fix_name'];
    	$date= date('Y-m-d H:i:s');

      if (!empty($photo_fix_name)){

    		$sql = "UPDATE aj_employes SET name = '$name',
    										address = '$address',
    										phone = '$phone',
    										email = '$email',
    										photo = '$photo_fix_name',
    										modified_user = '$user_id',
    										modified_date = '$date'
    										WHERE nik = '$nik'";
    	}
    	else{
        $sql = "UPDATE aj_employes SET name = '$name',
    										address = '$address',
    										phone = '$phone',
    										email = '$email',
    										modified_user = '$user_id',
    										modified_date = '$date'
    										WHERE nik = '$nik'";
    	}
      $this->db->query($sql);

    //  $sql2 = mysql_query("UPDATE aj_users SET level = '$level' WHERE nik = '$nik'");
    //  $this->db->query($sql2);
      $data = array(
        'level' => $level
      );
      $this->db->where('nik', $nik);
      $this->db->update('aj_users', $data);
    }
  }
