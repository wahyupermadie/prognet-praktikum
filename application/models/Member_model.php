<?php

Class Member_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// public function cek_user_login($username, $password)
	// {
 //        $query = $this->db->query("SELECT * FROM tb_peserta WHERE username='$username' AND password='$password'");
 //        return $query->row_array();
	// }

	// public function insert_upload($id_peserta, $nama_file, $soal)
	// {
	// 	$query = $this->db->query("INSERT INTO tb_upload (id_peserta, nama_file, waktu, soal) VALUES ($id_peserta, '$nama_file', now(), $soal)");
	// }

	// public function view()
	// {
	// 	$query = $this->db->query("SELECT tb_peserta.no_peserta, tb_peserta.nama_peserta, tb_peserta.nama_sekolah, tb_upload.waktu, tb_upload.soal FROM tb_peserta INNER JOIN tb_upload ON tb_upload.id_peserta=tb_peserta.id_peserta ORDER BY tb_upload.id_upload DESC LIMIT 10");
	// 	return $query->result();
	// }
	public function registerUser(){
		$insertData = array (
			'first_name' => $this->input->post('firstname'),
			'last_name' => $this->input->post('lastname'),
			'no_tlp_member' => $this->input->post('phonenumber'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'saldo' => '0',
			'profile_pict' => 'default.jpg'
		);

		$this->db->insert('tb_member', $insertData); 
	}

  	public function login($where){
		$query = $this->db->get_where('tb_member',$where);
   	 	return $query->row_array();
	}

	public function data_member($id){
		$sql="SELECT * FROM tb_member WHERE id_member=$id";
	  	$query = $this->db->query($sql);
	  	return $query->row_array();
	}
    public function cekEmail($email){
    	$sql = "SELECT COUNT(*) AS jumlah FROM tb_member WHERE email='$email'";
    	$query = $this->db->query($sql);
    	return $query->row_array();
    }
	
	public function edit_picture($id,$picture){
		$query = $this->db->query("UPDATE tb_member set profile_pict='$picture' WHERE id_member=$id");
	}
}
