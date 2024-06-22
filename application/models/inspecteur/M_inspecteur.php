<?php
class M_inspecteur extends CI_Model
{

	public function test_connection($ien,$password){
		$connect = "SELECT * FROM inspecteur WHERE IEN ='".$ien." 'AND password = '".$password."' ";
		$query = $this->db->query($connect);
		return $query->row_array();
	}






}
