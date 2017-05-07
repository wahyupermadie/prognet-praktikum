<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Futsal extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
 	{
 		parent::__construct();
 		$this->load->library('session');
 		$this->load->model('Futsal_model');
		$this->load->library('form_validation');

 	}
 	public function IndexFutsal()
 	{
 		$data['kota']=$this->Futsal_model->pilihKota();
 		$this->load->view('Futsal/indexFutsal',$data);
 	}

 	public function dashboardFutsal()
 	{
 		if(empty($this->session->userdata('id_futsal'))){
			redirect('../indexFutsal');}
		else {
			$id=$this->session->userdata('id_futsal');
			$data['futsal']=$this->Futsal_model->data_futsal($id);
			$this->load->view('/futsal/futsalAdmin',$data);
		}
 	}

 	public function loginFutsal()
 	{
 		$data_input = array (
 			'username_futsal' => $this->input->post('username1'),
 			'password_futsal' => md5($this->input->post('password'))	
 		);
 		$data = $this->Futsal_model->loginFutsal($data_input);
 		if(!empty($data)) {
			$session = array (
				'id_futsal' => $data['id_futsal'],
				'nama_futsal' => $data['nama_futsal'],
				'username_futsal'	=> $data['username_futsal'],
				'logo_futsal' => $data['logo_futsal']
			);
			$this->session->set_userdata($session);
			redirect('../futsal/dashboardFutsal','refresh');
        }else{
        	redirect('../indexFutsal?login=error', 'refresh');
        }
 	 }

 	public function registerFutsal()
	{
		$validator = array('success' => false, 'messages' => array());
		$insertData = array (
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$validate_data = array(
			array(
				'field' => 'namafutsal',
				
				'rules' => 'required'
			),
			array(
				'field' => 'username',
				
				'rules' => 'required|is_unique[tb_futsal.username_futsal]'
			),
			array(
				'field' => 'password1',
				
				'rules' => 'required|matches[confirmpassword]'
			),
			array(
				'field' => 'confirmpassword',
				
				'rules' => 'required'
			),
			array(
				'field' => 'address',
				
				'rules' => 'required'
			),
			array(
				'field' => 'kota',
				
				'rules' => 'required'
			),
			array(
				'field' => 'phonenumber1',
				
				'rules' => 'required|integer'
			)
		);
		$this->form_validation->set_rules($validate_data);
		$this->form_validation->set_message('is_unique','The {field} already exists');
		$this->form_validation->set_message('integer','The {field} must be number');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run() === true){
			$this->Futsal_model->registerFutsal();
			// $data=$this->Member_model->login($insertData);
			// $this->session->set_userdata('id_member', $data['id_member']);
			// $id=$this->session->userdata('id_member');
			$validator['success'] = true;
			$validator['messages'] = 'Successfully Registered';

		}else{
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}
		}

		echo json_encode($validator);
	}

	public function insert_lapangan()
	{
		$config['upload_path']='./images/futsal/lapangan';
		$config['allowed_types']='jpg|png|gif';
		$config['max_size']=100000;

		$new_name = time().$_FILES['file']['name'];
		$config['file_name'] = $new_name;
		$config['overwrite'] =  true;

		$this->load->library('upload',$config);
		$id = $this->session->userdata('id_futsal');
		$namalapangan = $this->input->post('addnamalapangan');
		// $kategori = $this->input->post('kategori');
		// $stok = $this->input->post('stok');
		// $harga = $this->input->post('harga');

		if (! $this->upload->do_upload('file'))
		{
			$error = array('error' => $this->upload->display_error());
		}else{
			$data =  array('upload_data' => $this->upload->data());
			$this->Futsal_model->insert_lapangan($namalapangan,$id,$data['upload_data']['file_name']);
		}
	}

	public function delete_lapangan()
	{
		if (!empty($this->session->userdata('id_futsal'))) {
			$id=$this->input->get('id');
			$this->Futsal_model->delete_lapangan($id);
			
		}else{
			redirect('../indexFutsal');
		}
	}

	public function jadwalFutsal()
	{
		if(empty($this->session->userdata('id_futsal'))){
			redirect('../indexFutsal');}
		else {
			$id=$this->session->userdata('id_futsal');
			$data['futsal']=$this->Futsal_model->data_futsal($id);
			$this->load->view('futsal/jadwalFutsal',$data);
		}
		
	}

}
