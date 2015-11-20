<?php
	class Products extends CI_Controller{
		public $data;
		public $config_upload_foto;
		public function __construct(){
			parent::__construct();
			$this->data = array();
			$this->data['content'] = "Products";
			$this->data['module'] = "products";
			$this->data['username'] = $this->session->userdata('username');
      $this->data['password'] = $this->session->userdata('password');
      $this->data['level']	  = $this->session->userdata('level');
      $this->data['user_id']  = $this->session->userdata('user_id');
      $this->data['name']	    = $this->session->userdata('name');
      $this->data['photo_ses']= $this->session->userdata('photo');
			$this->load->model('Mproducts');

			//ambil daftar categori dan supplier
			$this->load->model('Mcategories');
			$this->data['datacat'] = $this->Mcategories->get_categories();
			$this->load->model('Msuppliers');
			$this->data['datasup'] = $this->Msuppliers->get_suppliers();
		}

		public function index(){
			$this->data['dataproducts'] = $this->Mproducts->get_products();
			$this->load->view('index',$this->data);
		}

		public function add(){
			if($this->input->post()){
					$data = $this->input->post();

					$data['user_id'] = $this->data['user_id'];
					$this->Mproducts->add($data);
					redirect($this->data['module']);
			}
			$this->data['proses'] = "add";
			$this->data['action_form'] = site_url($this->data['module']."/add");
			$this->load->view('index',$this->data);
		}
		public function update($id){
			if($this->input->post()){
					$data = $this->input->post();
					$data['user_id'] = $this->data['user_id'];
					$this->Mproducts->update($data,$id);
					redirect($this->data['module']);
				}

				$update = $this->Mproducts->get_product($id);

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
