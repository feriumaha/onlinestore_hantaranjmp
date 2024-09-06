<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('product_models');
        if($this->session->userdata('enter') != TRUE){
            redirect(base_url());
        }
    }

    public function index()
    {
        $load_product['product'] = $this->product_models->getproduct();
        $this->load->view('product', $load_product);
    }
}
?>