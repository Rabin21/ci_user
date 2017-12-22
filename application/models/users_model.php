<?php 
class Users_model extends CI_Model{

	public function dbsignin($username, $password) {
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		if ($query->num_rows()>0) {
			return $query->row();
		}else {
			return false;
		}
	}
	public function dbinsert($data) {
		$this->db->insert('users', $data);
	}
}