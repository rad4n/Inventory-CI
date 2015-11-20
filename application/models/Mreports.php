<?php
  class Mreports extends CI_Model{
    public function  get_report($start_date,$end_date){
      $query = $this->db->query("SELECT * FROM aj_sales_transaction a, aj_products b, aj_categories c WHERE a.sales_date BETWEEN '$start_date' AND '$end_date' AND a.product_id=b.product_id AND b.category_id=c.category_id ORDER BY a.sales_date,a.sales_time ASC");
      return $query->result_array();
    }
  }
