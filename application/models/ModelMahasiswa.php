<?php
	class ModelMahasiswa extends CI_Model
	{
		public function getMahasiswa()
		{
			return $this->db->get('tb_mahasiswa');
		}

		public function simpan($data,$table)
		{
			$this->db->insert($table,$data);
		}

		public function getData($where, $table)
		{
			return $this->db->get_where($table, $where);
		}
		
		public function updateData($where,$data,$table)
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
			$query = $this->db->get_where('tb_mahasiswa', ['id' =>$id])->row();
			return $query;
		}

		public function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
	}
?>