<?php

Class Futsal_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function loginFutsal($where)
	{
		$query = $this->db->get_where('tb_futsal',$where);
		return $query->row_array();
	}

	public function registerFutsal(){
		$insertData = array (
			'nama_futsal' => $this->input->post('namafutsal'),
			'alamat_futsal' => $this->input->post('address'),
			'username_futsal' => $this->input->post('username'),
			'no_hp_futsal' => $this->input->post('phonenumber'),
			'password_futsal' => md5($this->input->post('password1')),
			'id_kota' => $this->input->post('kota'),
			'logo_futsal' => 'default.jpg'
		);

		$this->db->insert('tb_futsal', $insertData); 
	}

	public function pilihKota(){
		$query = $this->db->query("SELECT * from td_kota");
		return $query->result();
	}

	public function data_futsal($id){
		$sql="SELECT * FROM tb_futsal WHERE id_futsal=$id";
	  	$query = $this->db->query($sql);
	  	return $query->row_array();
	}

	public function insert_lapangan($namalapangan,$id,$file)
	{
		$query = $this->db->query("INSERT INTO tb_lapangan VALUES (null,'$namalapangan','$id','$file')");
		redirect('../futsal/dashboardFutsal','refresh');
	}

	public function view_lapangan($id)
	{
		$query = $this->db->query("SELECT * FROM tb_lapangan WHERE id_futsal=$id ");
		return $query->result();
	}

	public function delete_lapangan($id)
	{
		$query = $this->db->query("DELETE FROM tb_lapangan WHERE id_lapangan=$id");
		redirect('../futsal/dashboardFutsal','refresh');
	}

}