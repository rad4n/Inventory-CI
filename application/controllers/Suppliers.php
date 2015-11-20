<?php
	class Suppliers extends CI_Controller{
		public $data;
		public $config_upload_foto;
		public function __construct(){
			parent::__construct();
			$this->data = array();
			$this->data['content'] = "Suppliers";
			$this->data['module'] = "suppliers";
			$this->data['username'] = $this->session->userdata('username');
      $this->data['password'] = $this->session->userdata('password');
      $this->data['level']	  = $this->session->userdata('level');
      $this->data['user_id']  = $this->session->userdata('user_id');
      $this->data['name']	    = $this->session->userdata('name');
      $this->data['photo_ses']= $this->session->userdata('photo');
			$this->load->model('Msuppliers');
		}

		public function index(){
			$this->data['datasuppliers'] = $this->Msuppliers->get_suppliers();
			$this->load->view('index',$this->data);
		}

		public function add(){
			if($this->input->post()){
					$data = $this->input->post();
					$this->Msuppliers->add($data);
					redirect('Suppliers');
			}
			$this->data['proses'] = "add";
			$this->data['nikdate'] = date('Ymdhis');
			$this->data['action_form'] = site_url($this->data['module']."/add");
			$this->load->view('index',$this->data);
		}
		public function update($id){
			if($this->input->post()){
					$data = $this->input->post();
					$data['user_id'] = $this->data['user_id'];

					$this->Msuppliers->update($data,$id);
					redirect('Suppliers');
				}

				$update = $this->Msuppliers->get_supplier($id);

				if ($update['active'] == 'Y'){
					$this->data['aktif1'] = 'checked';
					$this->data['aktif2'] = '';
				}
				elseif($update['active'] == 'N'){
					$this->data['aktif2'] = 'checked';
					$this->data['aktif1'] = '';
				}
				else{
					$this->data['aktif1'] = '';
					$this->data['aktif2'] = '';
				}

				$this->data['action_form'] = site_url($this->data['module']."/update/".$id);
				$this->data['dataupdate'] = $update;
				$this->data['proses'] = "update";
				$this->load->view('index',$this->data);
		}
	}
