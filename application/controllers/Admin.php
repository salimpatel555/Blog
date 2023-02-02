<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Common_model');
		$this->load->library('upload');

	}

	private function loged_in(){
		$admin = $this->session->userdata('user_sess');
		if(!$admin['role']==1){
			redirect('home');
		}
	}


	public function index(){
		$this->loged_in();
		$data['post'] = $this->Common_model->get_all_post();
		$this->load->view('all_post',$data);
	}


	public function delete_post($id){
		$this->loged_in();
		$this->Common_model->del_post($id);
		$this->session->set_flashdata('message','Post Deleted Successfully');
		redirect('admin');
	}

	public function edit_post($id){
		$this->loged_in();
		$data['post']=$this->Common_model->get_post($id);
		$data['cat'] = $this->Common_model->get_all_cat();

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('category','Category','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('error', validation_errors());
		    $this->load->view('edit_post',$data);
		}else{
			$data = array(
				'title'=>$this->input->post('title'),
				'category'=>$this->input->post('category'),
				'description'=>$this->input->post('description')
			);

			if(!empty($_FILES['image']['name'])){
				$config['upload_path']   = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['encrypt_name']   = True;
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image')){
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					$this->load->view('edit_post',$data);
				}else{
					$post_image = $this->upload->data();
					$data['image'] = $post_image['file_name'];
					// print_r($post); exit;					
				}
			}
			    $this->Common_model->update_post($id,$data);
				$this->session->set_flashdata('message','Post Add Successfully');
				redirect('admin');
		}
	}

	public function add_category(){
		$this->loged_in();
		$this->form_validation->set_rules('category_name','Category Name','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('error', validation_errors());
			$this->load->view('add_category');
		}else{

			$data = array(
				'category_name'=>$this->input->post('category_name')
			);
			$this->Common_model->add_cat($data);
			$this->session->set_flashdata('message','Category Add Successfully');
			redirect('all_category');
		}
	}

	public function all_category(){
		$this->loged_in();
		$data['cat'] = $this->Common_model->get_all_cat();
		// print_r($data);exit;
		$this->load->view('category',$data);
	}

	public function delete_category($id){
		$this->loged_in();
		$this->Common_model->del_cat($id);
		$this->session->set_flashdata('message','Category Deleted Successfully');
		redirect('all_category');
	}


	public function edit_category($id){
		$this->loged_in();
		$data['cat'] = $this->Common_model->get_cat($id);
		$this->form_validation->set_rules('category_name','Category Name','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('error', validation_errors());
			$this->load->view('edit_category',$data);
		}else{
			$data = array(
				'category_name'=> $this->input->post('category_name')
			);
			$this->Common_model->edit_cat($id,$data);
			$this->session->set_flashdata('message','Category Updated Successfully');
		    redirect('all_category');
		}
	}



}



?>
