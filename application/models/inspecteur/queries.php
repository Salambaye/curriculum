<?php
class queries extends CI_Model{

	public function getNormes(){
		$query = $this->db->get('gestion_normes');

		if($query->num_rows() > 0)
		{
			return $query -> result();
		}
	}

	public function Ajout_normes($data){

		return $this->db->insert('gestion_normes', $data);

	}

	public function Modifier_normes($data, $id){

		return $this->db->where('id', $id)
					->update('gestion_normes', $data);
	}

	public function getSingleNormes($id){

		$query = $this->db->get_where('gestion_normes', array('id' => $id));
		if($query->num_rows() > 0)
		{
			return $query -> row();
		}
	}

	public function deleteNormes($id){
		return $this->db->delete('gestion_normes', ['id'=> $id]);
	}


}

