<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminGrabPhoneNumber extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('admingrabphonenumber_models');
        if($this->session->userdata('enter') != TRUE){
            redirect(base_url());
        }
    }

    public function index()
    {
        $datagrab['grab'] = $this->admingrabphonenumber_models->grabdata();
        $this->load->view('ci_admin/dashboard/admingrabphonenumber', $datagrab);
    }

}
?>