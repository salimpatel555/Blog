<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_user extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Common_model');
	}

	public function register(){
		if($this->session->userdata('user_sess')){
			redirect('home');
		}
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|max_length[10]');
		$this->form_validation->set_rules('cpassword','Conform Password','required|matches[password]');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('error', validation_errors());
			$this->load->view('register');
		}else{

			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'password'=>md5($this->input->post('password'))
			);
			// print_r($data); exit;

			$this->Common_model->user_reg($data);
			$this->session->set_flashdata('message','User Register Successfully');
			redirect('login');
		}
	}

	public function login(){
		if($this->session->userdata('user_sess')){
			redirect('home');
		}
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('error', validation_errors());
			$this->load->view('login');
		}else{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$user = $this->Common_model->user_login($email,$password);
			if(!$user){
				$this->session->set_flashdata('error','invalid Email or Password');
				$this->load->view('login');
			}else{
				$data = array(
					'id'=>$user->id,
					'name'=>$user->name,
					'email'=>$user->email,
					'role'=>$user->role
				);
				$user = $this->session->set_userdata('user_sess',$data);
				redirect('admin');
			}

		}
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}


	public function send_email(){
		$from_email = "developersk555@gmail.com";
		$to_email = $this->input->post('email');
		$this->load->library('email');
		$this->email->from($from_email,'Mr');
		$this->email->to($to_email);
		$this->email->subject('Email Test');
		$this->email->message('Hello Welcome My Site');
		if($this->email->send()){
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
			$this->load->view('email_form');
		}else{
			$this->session->set_flashdata("email_sent","You have encountered an error");
			$this->load->view('email_form');
		}

		// $config = array(
		// 	'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
		// 	'smtp_host' => 'smtp.gmail.com', 
		// 	'smtp_port' => 25,
		// 	'smtp_user' => 'developersk555@gmail.com',
		// 	'smtp_pass' => 'developer@555',
		// 	'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
		// 	'mailtype' => 'text', //plaintext 'text' mails or 'html'
		// 	'smtp_timeout' => '4', //in seconds
		// 	'charset' => 'iso-8859-1',
		// 	'wordwrap' => TRUE
		// );


	}

	public function get_IPaddress(){
		$this->load->library('user_agent');
		$data['browser']=$this->agent->browser().' '.$this->agent->version().' '.$this->input->ip_address();
		print_r($data);

	}
	


}



?>
