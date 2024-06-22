<?php
class M_eleve extends CI_Model
{

	public function test_connection($ien,$password){
		$connect = "SELECT * FROM eleve WHERE IEN ='".$ien." 'AND password = '".$password."' ";
		$query = $this->db->query($connect);
		return $query->row_array();
	}



}
