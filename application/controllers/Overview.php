<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('overview_models');
        if($this->session->userdata('enter') != TRUE){
            redirect(base_url());
        }
    }

    public function index()
    {
        $total_product['total_product'] = $this->overview_models->count_product();
        $total_admin['total_admin'] = $this->overview_models->count_admin();
        $admin['admin'] = $this->overview_models->getadmin();
        $slide['slide'] = $this->overview_models->getslide();
        $this->load->view('ci_admin/dashboard/overview', $total_product + $total_admin + $admin + $slide);
    }

    public function addscriptdm()
    {
        $id_fb = $this->input->post('id_fb');
        $code_fb = $this->input->post('code_fb');
        $fb_pixel = $this->input->post('fb_pixel');

        $id_google = $this->input->post('id_google');
        $code_google = $this->input->post('code_google');
        $google_ads = $this->input->post('google_ads');

        $update = $this->overview_models->updatedm($id_fb, $code_fb, $fb_pixel, $id_google, $code_google, $google_ads);
        redirect('overview');
    }

    public function addadmin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass = md5($password);

        $add = $this->overview_models->addamin($username, $pass);
        redirect('overview');
    }

    public function deladmin($admin_id)
    {
        $del = $this->overview_models->deladmin($admin_id);
        redirect('overview');
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function uploadslide(){
        $files = $this->input->post('slide_file');
        $karakter = 'abcdefghjkmpqrstuvwxyz123456789';
        $shuffles = substr(str_shuffle($karakter), 0, 9);

        $config['upload_path'] = './assets/images/slideshow';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024';
        $config['max_width'] = '1110';
        $config['max_height'] = '510';
        $config['file_name'] = $shuffles;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('slide_file'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('overview', $error);
        }else{
            $file_name = $this->upload->data("file_name");
            $upload_progress = $this->overview_models->uploadslide($file_name);
            redirect('overview');
        }
    }

    function delslide($slideshow_id){
        $del = $this->overview_models->delslide($slideshow_id);
        redirect('overview');
    }
}
?>