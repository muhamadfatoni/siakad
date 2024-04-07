<?php
	class ModelDosen extends CI_Model
	{
		public function getDosen()
		{
			return $this->db->get('dosen');
		}

		public function simpan($data,$table)
		{
			$this->db->insert($table,$data);
		}
		
		public function edit($where,$data,$table)
		{
			try {
				$this->db->where($where);
				$this->db->update($table,$data);
			} catch (Exception $e) {
				print_r($e);exit();
			}
		}

		public function detail_data($id = NULL )
		{
			$query = $this->db->get_where('dosen', ['id' =>$id])->row();
			return $query;
		}

	}
?>