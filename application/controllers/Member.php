<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {


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
 		$this->load->model('Member_model');
 		$this->load->helper('string');
 		$this->load->library('pagination');
		$this->load->library('form_validation');

 	}
	public function homeMember()
	{
		if(empty($this->session->userdata('id_member'))){
			redirect('../index');}
		else {
			$id=$this->session->userdata('id_member');
			$data['member']=$this->Member_model->data_member($id);
			$this->load->view('/member/home',$data);
		}
	}
	public function login()
	{
		$data_login = array (
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('pass'))
		);
		$data=$this->Member_model->login($data_login);
		
		if(!empty($data)) {
			$session = array (
				'id_member' => $data['id_member'],
				'email'		=> $data['email']
			);
			$this->session->set_userdata($session);
			redirect('../member/homeMember','refresh');
        }else{
        	redirect('../index?login=error', 'refresh');
        }
	}

	public function insert_picture()
	{
		$id=$this->session->userdata('id_member');
	 	$data['member']=$this->Member_model->data_member($id);
		$this->load->view('member/insert_picture',$data);
	}

	public function edit_picture(){
		$config['upload_path']='./images/member';
		$config['allowed_types']= 'jpg|png|gif';
		$config['max_size']= 100000;

		$new_name = time().$_FILES["picture"]['name'];
		$config['file_name'] = $new_name;
		$config['overwrite']=true;

		$this->load->library('upload',$config);
		$id_member=$this->session->userdata('id_member');
		if ( ! $this->upload->do_upload('picture'))
        {
			$error = array('error' => $this->upload->display_errors());
        }else{
        	$data_gambar = array('upload_data' => $this->upload->data());
        	$this->Member_model->edit_picture($id_member,$data_gambar['upload_data']['file_name']);
			redirect('../Member/homeMember', 'refresh');
      }
	}

	public function register()
	{
		$validator = array('success' => false, 'messages' => array());
		$insertData = array (
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);

		$validate_data = array(
			array(
				'field' => 'firstname',
				
				'rules' => 'required'
			),
			array(
				'field' => 'lastname',
				
				'rules' => 'required'
			),
			array(
				'field' => 'email',
				
				'rules' => 'required|is_unique[tb_member.email]'
			),
			array(
				'field' => 'password',
				
				'rules' => 'required|matches[password2]'
			),
			array(
				'field' => 'password2',
				
				'rules' => 'required'
			),
			array(
				'field' => 'phonenumber',
				
				'rules' => 'required|integer'
			)
		);
		$this->form_validation->set_rules($validate_data);
		$this->form_validation->set_message('is_unique','The {field} already exists');
		$this->form_validation->set_message('integer','The {field} must be number');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run() === true){
			$this->Member_model->registerUser();
			$data=$this->Member_model->login($insertData);
			$this->session->set_userdata('id_member', $data['id_member']);
			$id=$this->session->userdata('id_member');
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

}
