<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_m');


		//load library form validation
		$this->load->library('form_validation'); 
	}


	public function index(){
		$array = array('alamatkos' => 'graha', 'fasilitas' => '');
		$this->db->select('*');
		//$this->db->like($array);
		// WHERE `title` LIKE '%match%' ESCAPE '!' AND  `page1` LIKE '%match%' ESCAPE '!' AND  `page2` LIKE '%match%' ESCAPE '!'
		$this->db->order_by('rating', 'DESC');
		$this->db->limit(3);
		// Produces: ORDER BY `title` DESC
		$query = $this->db->get('kosan')->result_array();
		
		$data['kos'] =$query;


		//$a=array("red","green");
		//array_push($a,"blue","yellow");
		//print_r($a);

		$this->session->set_userdata($data);

		$this->load->view('beranda',$data);

		
		}	

}

