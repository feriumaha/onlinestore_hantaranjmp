<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciadmin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ciadmin_models');

        if($this->session->userdata('enter') == TRUE){
            redirect('overview');
        }
    }

    public function index()
    {
        $this->load->view('ci_admin/ciadmin');
    }

    public function auth()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        $login_auth = $this->ciadmin_models->login($username, $password);

        if($login_auth->num_rows() > 0){
            $data = $login_auth->row_array();
            $data_session = array(
                'enter' => TRUE,
                'access' => '1',
                'SESSION-username' => $data['username'],
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('overview');
        }else{
            $this->session->set_flashdata('msg','Username and password not found or wrong');
            redirect('ciadmin');
        }
    }
}
?>