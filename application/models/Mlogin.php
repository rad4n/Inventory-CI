<?php
class Mlogin extends CI_Model{
  public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
  public function cek_login($user,$pass){
      $query = $this->db->query("SELECT * FROM aj_users,aj_employes WHERE username = '$user' AND passwd = '$pass' AND aj_employes.nik=aj_users.nik ");
      return $query;
  }
}
