<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAddProduct extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('addproduct_models');
        if($this->session->userdata('enter') != TRUE){
            redirect(base_url());
        }
    }

    public function index()
    {
        $this->load->view('ci_admin/dashboard/adminaddproduct');
    }

    public function uploadproduct()
    {
        $files = $this->input->post('photo_product');
        $product_name = $this->input->post('product_name');
        $price = $this->input->post('price');
        $detail = $this->input->post('detail');
        $shopee_link = $this->input->post('shopee_link');
        $bukalapak_link = $this->input->post('bukalapak_link');
        $tokopedia_link = $this->input->post('tokopedia_link');
        $lazada_link = $this->input->post('lazada_link');
        $metadata = $this->input->post('metadata');

        $karakter = 'ABCDEFGHJKMNOPQRSTUVWXYZ123456789';
        $shuffles  = substr(str_shuffle($karakter), 0, 9);

        $config['upload_path'] = './assets/images/product';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1024';
        $config['max_width'] = '719';
        $config['max_height'] = '726';
        $config['file_name'] = $shuffles;
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('photo_product')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('adminaddproduct', $error);
        }else{
            //create product id
            $karakter = 'ABCDEFGHJKMNOPQRSTUVWXYZabcdefghjkmnopqrstuvwxyz123456789';
            $shuffle  = substr(str_shuffle($karakter), 0, 9);
            $product_id = $shuffle;
            //first save for data
            $upload_progress = $this->addproduct_models->uploadproduct($product_id, $product_name, $price, $detail, $shopee_link, $bukalapak_link, $tokopedia_link, $lazada_link, $metadata);
            //second save for image
            $file_names = $this->upload->data("file_name");
            $status = 1;
            $upload_progress_2 = $this->addproduct_models->uploadphotoproduct($file_names, $product_id, $product_id, $status);  
            
            redirect('adminproduct');
        }
    }
}
?>