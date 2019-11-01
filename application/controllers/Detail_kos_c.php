<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kos_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_m');

		//load library form validation
		$this->load->library('form_validation'); 
	}


	public function index(){
		
		if($this->form_validation->run() == false){
			$this->load->view('detail_kos');
		}
		
		}
}