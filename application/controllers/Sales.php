<?php
	class Sales extends CI_Controller{
		public $data;
		public $config_upload_foto;
		public function __construct(){
			parent::__construct();
			$this->data = array();
			$this->data['content'] = "Sales";
			$this->data['module'] = "sales";
			$this->data['username'] = $this->session->userdata('username');
      $this->data['password'] = $this->session->userdata('password');
      $this->data['level']	  = $this->session->userdata('level');
      $this->data['user_id']  = $this->session->userdata('user_id');
      $this->data['name']	    = $this->session->userdata('name');
      $this->data['photo_ses']= $this->session->userdata('photo');
			$this->load->model('Msales');
		}

		public function index(){
			$sales_date = date('Y-m-d');
			$this->data['datasales'] = $this->Msales->get_sales($sales_date);
			$this->load->view('index',$this->data);
		}

		public function add_transaction(){
			if($this->input->post()){
					$data = $this->input->post();

					$data['user_id'] = $this->data['user_id'];
					$result = $this->Msales->add($data);
					if($result === false){echo "something wrong"; exit;}
					redirect($this->data['module']);
			}
			$this->data['dataproduct'] = $this->Msales->get_products();
			$this->data['proses'] = "add_transaction";
			$this->data['date'] = date('Y-m-d');
			$this->data['action_form'] = site_url($this->data['module']."/add_transaction");
			$this->load->view('index',$this->data);
		}

		public function update($id){
			if($this->input->post()){
					$data = $this->input->post();
					$data['user_id'] = $this->data['user_id'];
					$this->Msales->update($data,$id);
					redirect($this->data['module']);
				}

				$update = $this->Msales->get_trx($id);
				$this->data['date'] = tgl_indo(date('Y-m-d'));
				$this->data['dataproduct'] = $update;
				$this->data['trx_id'] = $id;
				$this->data['proses'] = "update";
				$this->load->view('index',$this->data);
		}
	}
