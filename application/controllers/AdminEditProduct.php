<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminEditProduct extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('admineditproduct_models');
        if($this->session->userdata('enter') != TRUE){
            redirect(base_url());
        }
    }

    public function showdata($product_id)
    {
        $getdata['data'] = $this->admineditproduct_models->data($product_id);
        $this->load->view('ci_admin/dashboard/admineditproduct', $getdata);
    }

    public function addphoto()
    {
        $files = $this->input->post('photo_product');
        $product_id = $this->input->post('product_id');
        $karakter = 'abcdefghjkmpqrstuvwxyz123456789';
        $shuffles = substr(str_shuffle($karakter), 0, 9);

        $config['upload_path'] = './assets/images/product';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024';
        $config['max_width'] = '719';
        $config['max_height'] = '726';
        $config['file_name'] = $shuffles;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('photo_product'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admineditproduct/showdata/'.$product_id.'', $error);
        }else{
            $file_name = $this->upload->data("file_name");
            $upload_progress = $this->admineditproduct_models->addphoto($file_name, $product_id);
            redirect('admineditproduct/showdata/'.$product_id.'');
        }
    }

    public function delete_photo($join)
    {
        //substr
        $slice1 = substr($join, 0, 9); //product_id
        $slice2 = substr($join, 9);// file name

        $product_id = $slice1;
        $file_name = $slice2;
        $del = unlink(base_url('assets/iamges/product/'.$file_name.''));
        $delete_photo = $this->admineditproduct_models->delete_photo($file_name);
        redirect('admineditproduct/showdata/'.$product_id.'');
    }

    public function editdata()
    {
        $product_id = $this->input->post("product_id");
        $product_name = $this->input->post("product_name");
        $price = $this->input->post("price");
        $detail = $this->input->post("detail");
        $shopee_link = $this->input->post("shopee_link");
        $bukalapak_link = $this->input->post("bukalapak_link");
        $tokopedia_link = $this->input->post("tokopedia_link");
        $lazada_link = $this->input->post("lazada_link");
        $metadata = $this->input->post("metadata");

        $update = $this->admineditproduct_models->updatedata($product_id, $product_name, $price, $detail, $shopee_link, $bukalapak_link, $tokopedia_link, $lazada_link, $metadata);
        redirect('admineditproduct/showdata/'.$product_id.'');
    }
}
?>