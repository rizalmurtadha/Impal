<?php

class user_m extends CI_model
{

	public function getAllUser()
	{
		//use query builder to get data table "user"
		return $this->db->get('user')->result_array();
	}

	public function getAllMWU()
	{
		//use query builder to get data table "mwu"
		return $this->db->get('mwu')->result_array();
	}

	public function tambahKustomer()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"no_telp" => $this->input->post('telp', true)
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('kustomer', $data);
	}
	public function tambahPemilik()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"no_telp" => $this->input->post('telp', true)
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('pemilikkos', $data);
	}

/*	public function tambahMWU($img)
	{
		$data = [
			"nama" => $this->input->post('name', true),
			"company" => $this->input->post('company', true),
			"image" => $img
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('mwu', $data);
	}

	public function hapusDataUser($id)
	{
		
		//use query builder to delete data based on id
		$this->db->where('id',$id);
		$this->db->delete('user'); 
	}

	public function hapusDataMWU($id)
	{
		
		//use query builder to delete data based on id
		$this->db->where('id',$id);
		$this->db->delete('mwu'); 
	}




	public function getUser($email)
	{
		//get data mahasiswa based on id 
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}



	

	public function getMWUById($id)
	{
		//get data mahasiswa based on id 
		return $this->db->get_where('mwu', ['id' => $id])->row_array();
	}

	public function ubahDataMWU()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"company" => $this->input->post('company', true),
		];

		//use query builder class to update data mahasiswa based on id
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mwu', $data);
	}
*/
}
