<?php 
class Users_model extends CI_Model{

	public function dbsignin($username, $password) {
		$this->db->where('username',$username);
		$query = $this->db->get('users');
		if ($query->num_rows()>0) {
			$result = $query->row();
			if (password_verify($password, $result->password)===TRUE) {
				return $result;
			}
		}else {
			return false;
		}
	}
	public function dbinsert($data) {
		$this->db->insert('users', $data);
	}
}