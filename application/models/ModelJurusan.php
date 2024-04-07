<?php
	class ModelJurusan extends CI_Model
	{
		public function getJurusan()
		{
			return $this->db->get('jurusan');
		}
	}
?>