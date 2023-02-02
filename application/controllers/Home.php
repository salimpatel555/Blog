<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Common_model');
		$this->load->library('upload');

	}

	private function loged_in(){
		if(!$this->session->userdata('user_sess')){
			redirect('login');
		}
	}


	public function index(){
		$data['post'] = $this->Common_model->get_all_post();
		$this->load->view('index',$data);
	}


	public function add_post(){
		$this->loged_in();
		$data['cat'] = $this->Common_model->get_all_cat();

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('category','Category','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('error', validation_errors());
		    $this->load->view('add_post',$data);
		}
		$user_id = $this->session->userdata('user_sess');
		$post = array(
			'title'=>$this->input->post('title'),
			'category'=>$this->input->post('category'),
			'description'=>$this->input->post('description'),
			'user_id'=>$user_id['id'],
			'created_at'=>date("Y-m-d")
		);
		
		if(!empty($_FILES['image']['name'])){
			$config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
			$config['encrypt_name']   = True;
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
				redirect('add_post');
			}else{
				$image = $this->upload->data();
				$post['image'] = $image['file_name'];
			}

			$this->Common_model->add_data($post);
			$this->session->set_flashdata('message','Post Add Successfully');
			redirect('home');
		}
	}



	public function post_details($id){
		$data['post'] = $this->Common_model->get_details($id);
		$this->load->view('post_details',$data);
	}

	


}



?>
