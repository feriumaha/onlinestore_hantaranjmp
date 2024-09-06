<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('detail_models');
        $this->load->helper('rupiah_helper');
    }

    public function product($product_id){
        $getdetail['detail'] = $this->detail_models->detailproduct($product_id);
        $this->load->view('detail', $getdetail);
    }
}
?>