<?php
	class Reports extends CI_Controller{
		public $data;
		public function __construct(){
			parent::__construct();
			$this->data = array();
			$this->data['content'] = "Reports";
			$this->data['module'] = "reports";
			$this->data['username'] = $this->session->userdata('username');
      $this->data['password'] = $this->session->userdata('password');
      $this->data['level']	  = $this->session->userdata('level');
      $this->data['user_id']  = $this->session->userdata('user_id');
      $this->data['name']	    = $this->session->userdata('name');
      $this->data['photo_ses']= $this->session->userdata('photo');
			$this->load->model('Mreports');
		}

		public function index(){
			$this->data['form_action'] = $this->data['module']."/search";
			$this->load->view('index',$this->data);
		}

		public function search(){
			if($this->input->post()){
				$periode_awal =$this->input->post('periode_awal');
				$periode_akhir = $this->input->post('periode_akhir');

				$date_awal = explode("/", $periode_awal);
				$date1 = $date_awal[1];
				$month1= $date_awal[0];
				$year1 = $date_awal[2];
				$date_fix_awal = $year1."-".$month1."-".$date1;

				$date_akhir = explode("/", $periode_akhir);
				$date2 = $date_akhir[1];
				$month2 = $date_akhir[0];
				$year2 = $date_akhir[2];
				$date_fix_akhir = $year2."-".$month2."-".$date2;
			}
			$this->data['datareports'] = $this->Mreports->get_report($date_fix_awal,$date_fix_akhir);
			$this->data['proses'] = "report";
			$this->data['date'] = date('Y-m-d');
		//	$this->data['action_form'] = site_url($this->data['module']."/add_transaction");
				$this->data['form_action'] = $this->data['module']."/search";
			$this->load->view('index',$this->data);
		}
	}
