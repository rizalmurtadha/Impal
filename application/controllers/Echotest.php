<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Echotest extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_m');


		//load library form validation
		$this->load->library('form_validation'); 
	}


	public function index(){
		$array = array('alamatkos' => 'graha', 'fasilitas' => '');
		$this->db->select('*');
		$this->db->like($array);
		// WHERE `title` LIKE '%match%' ESCAPE '!' AND  `page1` LIKE '%match%' ESCAPE '!' AND  `page2` LIKE '%match%' ESCAPE '!'
		$query = $this->db->get('kosan');
		
		foreach ($query->result() as $row)
		{
			foreach ($row as $rows)
			{
				echo $rows;
				echo "<br>";
			}
			echo "<br>";
		}
		foreach ($query->result() as $row)
		{
			echo $row->namakos;
			echo "<br>";
		}
		echo('mantap');	
	}
}