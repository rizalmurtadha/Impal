<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_m');

		//load library form validation
		$this->load->library('form_validation'); 
	}


	public function index(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		

		if($this->form_validation->run() == false){
			$this->load->view('Login');
		}
		else{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('kustomer', ['username' => $username])->row_array();
 


			//jika usernya ada
			if($user){
				// cek password
				
				if($password == $user['password']){
					$data =[
						'username' => $user['username'],
						'role' => 1 // Pencari
						// 'paket' => $user['paket'],
					];

					$this->session->set_userdata($data);
					redirect('Beranda_c');

				}
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">password wrong!</div>');
					redirect('Login_c');
					
				}


			}
			else{
				$user = $this->db->get_where('pemilikkos', ['username' => $username])->row_array();

				if($user){
					// cek password
					
					if($password == $user['password']){
						$data =[
							'username' => $user['username'],
							'role' => 2 //Pemilik kos
							// 'paket' => $user['paket'],
						];

						$this->session->set_userdata($data);
						redirect('Beranda_c');
					}
					else{
						$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">password wrong!</div>');
						redirect('Login_c');
						
					}


				}
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not registered!</div>');
					redirect('Login_c');
					
				}
				
			}
		
		}
	}
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		//$this->load->view('Home_V');
		redirect('Beranda_c');
	}
}

