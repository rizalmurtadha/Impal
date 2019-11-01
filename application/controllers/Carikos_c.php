<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Carikos_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_m');

		//load library form validation
		$this->load->library('form_validation'); 
	}


	public function index(){
		if($this->input->post('gender') != NULL){
			$gender = $this->input->post('gender');	
		}
		else{
			$gender = '';
		}
		if($this->input->post('harga1') != NULL){
			$min = $this->input->post('harga1');	
		}
		else{
			$min = 0;
		}
		if($this->input->post('harga2') != NULL and $this->input->post('harga2') > $this->input->post('harga1')){
			$max = $this->input->post('harga2');	
		}
		else{
			$max = 999999999999999999;
		}
		
		$lokasis = $this->input->post('lokasi');
		//$fasilitas = $_POST['fasilitas'];

		$array = array('genderkos' => $gender, 'alamatkos' => $lokasis, 'fasilitas' => '');
		$this->db->select('*');
		$this->db->like($array);
		// WHERE `title` LIKE '%match%' ESCAPE '!' AND  `page1` LIKE '%match%' ESCAPE '!' AND  `page2` LIKE '%match%' ESCAPE '!'
		$this->db->where('harga >', $min); // Produces: WHERE name != 'Joe' AND id < 45
		$this->db->where('harga <', $max); // Produces: WHERE name != 'Joe' AND id < 45
		$this->db->order_by('harga', 'ASC');
		//$this->db->limit(3);
		// Produces: ORDER BY `title` DESC
		$query = $this->db->get('kosan')->result_array();
		$data['kos'] =$query;
		$this->session->set_userdata($data);

		$this->load->view('Carikos',$data);

		//conditon in form_validation, if user input form = false, then load page "tambah" again
		

}

}

