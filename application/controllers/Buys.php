<?php
	class Buys extends CI_Controller{
		public $data;
		public $config_upload_foto;
		public function __construct(){
			parent::__construct();
			$this->data = array();
			$this->data['content'] = "Buys";
			$this->data['module'] = "buys";
			$this->data['username'] = $this->session->userdata('username');
      $this->data['password'] = $this->session->userdata('password');
      $this->data['level']	  = $this->session->userdata('level');
      $this->data['user_id']  = $this->session->userdata('user_id');
      $this->data['name']	    = $this->session->userdata('name');
      $this->data['photo_ses']= $this->session->userdata('photo');
			$this->load->model('Mbuys');
			$this->load->model('Msuppliers');
			$this->load->model('Mproducts');
			$this->data['dataproduct'] = $this->Mproducts->get_products();
			$this->data['datasupp'] = $this->Msuppliers->get_suppliers();
			$this->data['date'] = tgl_indo(date('Y-m-d'));
		}

		public function index(){
			$buys_date = date('Y-m-d');
			$this->data['databuys'] = $this->Mbuys->get_buys($buys_date);
			$this->load->view('index',$this->data);
		}

		public function add(){
			if($this->input->post()){
					$data = $this->input->post();
					$data['user_id'] = $this->data['user_id'];

					//dapatkan stock product sebelumnya
					$this->load->model('Mproducts');
					$qty_old_product = $this->Mproducts->get_product($data['product']);

					$this->Mbuys->add($data,$qty_old_product);
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
					$this->Mbuys->update($data,$id);
					redirect($this->data['module']);
				}

				$update = $this->Mbuys->get_buy($id);

				$this->data['action_form'] = site_url($this->data['module']."/update/".$id);
				$this->data['databuys'] = $update;
				$this->data['proses'] = "update";
				$this->load->view('index',$this->data);
		}
	}
