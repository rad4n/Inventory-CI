<?php
  class Beranda extends CI_Controller{
    public function index(){
      $data['username'] = $this->session->userdata('username');
      $data['password'] = $this->session->userdata('password');
      $data['level']	  = $this->session->userdata('level');
      $data['user_id']  = $this->session->userdata('user_id');
      $data['name']	  = $this->session->userdata('name');
      $data['photo_ses']= $this->session->userdata('photo');
    //print_r($data); exit;
      if (empty($data['username']) AND empty($data['$password'])){
        redirect('awal');
      }
      $this->load->view('index',$data);
    }
  }
?>
