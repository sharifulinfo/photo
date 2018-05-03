<?php

/**
* Public Controller
*/
class Login extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('login_model','lmodel');  
	}

	public function index(){
	 	if( $this->session->userdata('user_id')){
	 		return redirect('Admin/dashboard');
	 	} 
	 	$this->load->view('photo-master/Admin/login');
	 }

	public function login_function(){ 
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red; padding:15px;">', '</div>'); 
		$email = $this->input->post('email'); 
		$pass = $this->input->post('password'); 
		if( $this->form_validation->run('login')){ 
			$valid_user = $this->lmodel->_login_model_($email,$pass); 
			if( $valid_user ){
				$this->session->set_userdata('user_id', $valid_user->user_id);
				$this->session->set_userdata('user_name', $valid_user->user_name);
				$this->session->set_userdata('user_email', $valid_user->user_email);
				$this->session->set_userdata('user_role', $valid_user->user_role);
	 			return redirect('admin/dashboard');
			}else{ 
				$this->session->set_flashdata('login_faild','Invalid Username/Password..');
				return redirect('login');
			}
		}else{
			
		}

		$this->load->view('photo-master/Admin/login');
	}

	public function logout(){ 
	 	$this->session->unset_userdata('user_id');
	 	redirect('login');
	 }

}