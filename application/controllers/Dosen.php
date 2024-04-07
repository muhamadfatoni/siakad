<?php 
	class Dosen extends CI_Controller{
		function __construct() {
	        parent::__construct();
	        $this->load->model('ModelDosen');
	    }
		public function index()
		{
			$data['listdosen'] = $this->ModelDosen->getDosen()->result();
			// foreach ($data as $index => $model) {
			// 	echo $index .'<br>';
			// 	var_dump($model);
			// 	echo '<hr>';
			// }
			$data['page_title']='Data dosen';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dosen/index', $data);
			$this->load->view('templates/footer');

		}

		public function tambah()
		{
			// if (isset($_POST) && !empty($_POST)) {

			// 	echo 'input post';echo '<br>';
			// 	print_r($this->input->post());
			// 	echo '<hr>';
			// 	echo '$_GET';echo '<br>';
			// 	print_r($_GET); echo '<hr>';
			// 	echo '$_POST';echo '<br>';
			// 	print_r($_POST);
			// 	exit();
			// }

			if ($this->input->post() !== NULL && !empty($this->input->post())) {
				// ketika ada yang di post simpan ke db 
				$nip 			= $this->input->post('nip');
				$nama 			= $this->input->post('nama');
				$email  		= $this->input->post('email');
				$data  = [
					'nip'		=> $nip,
					'nama'		=> $nama,
					'email'		=> $email,		
				];
				$this->ModelDosen->simpan($data, 'dosen');
				redirect('dosen/index');
					
				
			}

			$data['page_title']='tambah Data dosen';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dosen/tambah');
			$this->load->view('templates/footer');
		}

		public function edit($id=NULL)
		{
			$where = ['id'=>$id];
			$data['dosen'] = $this->ModelDosen->getDosen($where, 'dosen')->result();
			if ($this->input->post() !== NULL && !empty($this->input->post())) {
				//echo 'isi yang di post <br>';
				// print_r($this->input->post());
				// echo '<hr> <hr>';
				// ketika ada yang di post simpan ke db 
				$nip 			= $this->input->post('nip');
				$nama 			= $this->input->post('nama');
				$email  		= $this->input->post('email');
				
				$data  = [
					'nip'		=> $nip,
					'nama'		=> $nama,
					'email'		=> $email,
				];
				// echo 'isi data <br>';
				// print_r($data);exit();

				$where = [
					'id'	=>$this->input->post('id')	
				];

				$this->ModelDosen->edit($where,$data, 'dosen');
				redirect('dosen/index');
			}

			$data['page_title']='edit Data dosen';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dosen/edit', $data);
			$this->load->view('templates/footer');
		}

		public function detail($id){
			$detail = $this->ModelDosen->detail_data($id);
			$data['detail'] = $detail;
			$data['page_title'] = 'Detail Data Dosen';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dosen/detail', $data);
			$this->load->view('templates/footer');
		}


	}
?>
