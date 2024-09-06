<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProduct extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('adminproduct_models');
        $this->load->helper('rupiah_helper');
        if($this->session->userdata('enter') != TRUE){
            redirect(base_url());
        }
    }

    public function index()
    {
        $listproduct['products'] = $this->adminproduct_models->getproductlist();
        $this->load->view('ci_admin/dashboard/adminproduct', $listproduct);
    }

    public function delete($id){
        $this->adminproduct_models->deleteproduct($id);
        redirect('adminproduct');
    }
}
?>