<?php
	class Users extends CI_Controller{
		public $data;
		public $config_upload_foto;
		public function __construct(){
			parent::__construct();
			$this->data = array();
			$this->data['content'] = "Users";
			$this->data['module'] = "users";
			$this->data['username'] = $this->session->userdata('username');
      $this->data['password'] = $this->session->userdata('password');
      $this->data['level']	  = $this->session->userdata('level');
      $this->data['user_id']  = $this->session->userdata('user_id');
      $this->data['name']	    = $this->session->userdata('name');
      $this->data['photo_ses']= $this->session->userdata('photo');
			$this->load->model('Muser');

			//inisialisasi library untuk keperluan upload foto
			$this->config_upload_foto['upload_path']          = './asset/upload/';
      $this->config_upload_foto['allowed_types']        = 'gif|jpg|png';
      $this->config_upload_foto['max_size']             = 100;
      $this->config_upload_foto['max_width']            = 1024;
      $this->config_upload_foto['max_height']           = 768;

		}

		public function index(){
			$this->data['datausers'] = $this->Muser->get_users();
			$this->load->view('index',$this->data);
		}

		public function add_user(){
			if($this->input->post()){
					$data = $this->input->post();

					//beri nama file foto sesuai nik
					$this->config_upload_foto['file_name'] 	= $data['nik'];
					$this->load->library('upload', $this->config_upload_foto);
					$upload = $this->upload->do_upload('photo');

					if($upload) {
						$data['photo_fix_name'] = $this->upload->data('file_name');
					}

					$data['user_id'] = $this->data['user_id'];
					$this->Muser->add($data);
					redirect('Users');
			}
			$this->data['proses'] = "add";
			$this->data['nikdate'] = date('Ymdhis');
			$this->data['action_form'] = site_url($this->data['module']."/add_user");
			$this->load->view('index',$this->data);
		}
		public function update($id){
			if($this->input->post()){
					$data = $this->input->post();

					//beri nama file foto sesuai nik
					$this->config_upload_foto['file_name'] 	= $data['nik'];
					$this->load->library('upload', $this->config_upload_foto);
					$upload = $this->upload->do_upload('photo');
					$data['photo_fix_name'] = "";
					if($upload) {
						$data['photo_fix_name'] = $this->upload->data('file_name');
					}

					$data['user_id'] = $this->data['user_id'];

					$this->Muser->update($data,$id);
					redirect('Users');
				}

				$update = $this->Muser->get_user($id);

				if ($update['level'] == 'Y') $update['level1'] = "checked";
				elseif($update['level'] == 'N') $update['level2'] = "checked";
				else{
					$update['level1'] = '';
					$update['level2'] = '';
				}
				$this->data['dataupdate'] = $update;
				$this->data['proses'] = "update";
				$this->load->view('index',$this->data);
		}
	}
