<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('welcome_models');
	}
	
	public function index()
	{
		$load_slide['slide'] = $this->welcome_models->getslide();
		$load_product['product'] = $this->welcome_models->getproduct();
		$this->load->view('welcome', $load_slide + $load_product);
	}
}
