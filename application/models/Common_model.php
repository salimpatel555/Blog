<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model{

	public function user_reg($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}

	public function user_login($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$q = $this->db->get('users');
		if($q->num_rows()==True){
			return $q->row();
		}
		return False;
	}


	public function get_all_post(){
		$this->db->select('p.id,p.title,p.image,p.description,p.created_at,c.category_name,u.name,u.email');
		$this->db->from('post p');
		$this->db->join('category c', 'c.id=p.category');
		$this->db->join('users u','u.id=p.user_id');
		return $this->db->get()->result_array();
	}


	public function get_details($id){
		$this->db->select('p.id,p.title,p.image,p.description,p.created_at,c.category_name,u.name,u.email');
		$this->db->from('post p');
		$this->db->join('category c', 'c.id=p.category');
		$this->db->join('users u','u.id=p.user_id');
		$this->db->where('p.id',$id);
		return $this->db->get()->row_array();
	}

	public function get_post($id){
		$this->db->where('id',$id);
		return $this->db->get('post')->row_array();
	}

	public function update_post($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('post',$data);
	}


	public function add_data($data){
		$this->db->insert('post',$data);
		return $this->db->insert_id();
	}

	public function del_post($id){
		$this->db->where('id',$id);
		return $this->db->delete('post');
	}


	public function add_cat($data){
		$this->db->insert('category',$data);
		return $this->db->insert_id();
	}


	public function get_all_cat(){
		return $this->db->get('category')->result_array();
	}


	public function del_cat($id){
		$this->db->where('id',$id);
		return $this->db->delete('category');
	}


	public function get_cat($id){
		$this->db->where('id',$id);
		return $this->db->get('category')->row_array();
	}


	public function edit_cat($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('category',$data);
	}


	


}
