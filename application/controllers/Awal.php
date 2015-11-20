<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {
	public function index()
	{
		if($this->input->post()){
			$user = $this->input->post('username');
			$pass = md5($this->input->post('pass'));
			$this->load->model('mlogin');
			$cek_login = $this->mlogin->cek_login($user,$pass);
			if($cek_login->num_rows()<0)$data['error'] = 'error';
			else {
				$data = $cek_login->row();

				$username	= $data->username;
				$password	= $data->passwd;
				$level		= $data->level;
				$user_id	= $data->user_id;
			//	$photo		= $data->photo;
				$name		  = $data->name;

				$this->session->set_userdata("username", $username);
				$this->session->set_userdata("password", $password);
				$this->session->set_userdata("level", $level);
				$this->session->set_userdata("user_id", $user_id);
				$this->session->set_userdata("name", $name);
				$this->session->set_userdata("photo", $photo);
			//	$this->input->set_cookie($photo);


				redirect('beranda');
			}
		}
		$data['action'] = site_url('awal');
		$this->load->view('login',$data);
	}
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
		redirect('awal');
	}
}
