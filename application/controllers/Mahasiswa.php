<?php 
	class Mahasiswa extends CI_Controller
	{
		function __construct()
		{
		    parent::__construct();
		    $this->load->model('ModelMahasiswa');
	    }

		public function index()
		{
			//$data['mahasiswas'] = $this->ModelMahasiswa->getMahasiswa()->result_array();
			$data['mahasiswas'] = $this->ModelMahasiswa->getMahasiswa()->result();
			// foreach ($data as $index => $model) {
			// 	echo $index .'<br>';
			// 	var_dump($model);
			// 	echo '<hr>';
			// }
			$data['page_title']='Data Mahasiswa';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('mahasiswa/index', $data);
			$this->load->view('templates/footer');

		}

		public function create()
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

			if ($this->input->post() !== NULL && !empty($this->input->post()))
			{
				// ketika ada yang di post simpan ke db 
				$nama 			= $this->input->post('nama');
				$nim 			= $this->input->post('nim');
				$tgl_lahir 		= $this->input->post('tgl_lahir');
				$jurusan		= $this->input->post('jurusan');
				$alamat			= $this->input->post('alamat');
				$email			= $this->input->post('email');
				$no_telp		= $this->input->post('no_telp');
				$foto 			= $_FILES['foto'];
				if ($foto=''){}else{
					$config['upload_path']		= './assets/foto';
					$config['allowed_types']	='jpg|png|gif';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('foto')){
						echo "Upload Gagal";die();
					}else{
						$foto=$this->upload->data('file_name');
					}
				}

				$data  = [
					'nama'		=> $nama,
					'nim'		=> $nim,
					'tgl_lahir' => $tgl_lahir,
					'jurusan'	=> $jurusan,
					'alamat'	=> $alamat,
					'email'		=> $email,
					'no_telp'	=> $no_telp,
					'foto'		=> $foto
				];
				$this->ModelMahasiswa->simpan($data, 'tb_mahasiswa');
				redirect('mahasiswa/index');
				
			}

			$data['page_title']='Data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('mahasiswa/create');
			$this->load->view('templates/footer');
		}


		public function update($id=NULL)
		{
			$where = ['id'=>$id];
			$data['mahasiswa'] = $this->ModelMahasiswa->getData($where, 'tb_mahasiswa')->result();
			if ($this->input->post() !== NULL && !empty($this->input->post()))
			{
				//echo 'isi yang di post <br>';
				//print_r($this->input->post());
				echo '<hr> <hr>';
				// ketika ada yang di post simpan ke db 
				$nama 			= $this->input->post('nama');
				$nim 			= $this->input->post('nim');
				$tgl_lahir 		= $this->input->post('tgl_lahir');
				$jurusan		= $this->input->post('jurusan');
				$alamat			= $this->input->post('alamat');
				$email			= $this->input->post('email');
				$no_telp		= $this->input->post('no_telp');

				$data  = [
					'nama'		=> $nama,
					'nim'		=> $nim,
					'tgl_lahir' => $tgl_lahir,
					'jurusan'	=> $jurusan,
					'alamat'	=> $alamat,
					'email'		=> $email,
					'no_telp'	=> $no_telp
				];
				//echo 'isi data <br>';
				//print_r($data);exit();

				$where = [
					'id'	=>$this->input->post('id')	
				];
				$this->ModelMahasiswa->updateData($where,$data, 'tb_mahasiswa');
				redirect('mahasiswa/index');
				
			}

			$data['page_title']='Data';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('mahasiswa/update', $data);
			$this->load->view('templates/footer');
		}

		public function detail($id)
		{
			$detail = $this->ModelMahasiswa->detail_data($id);
			$data['detail'] = $detail;
			$data['page_title'] = 'Detail Mahasiswa';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('detail', $data);
			$this->load->view('templates/footer');
		}

		public function hapus ($id)
		{
			$where = array ('id' => $id);
			$this->m_mahasiswa->hapus_data($where, 'tb_mahasiswa');
			redirect ('mahasiswa/index');
		}

		public function print()
		{
			$data['mahasiswa'] = $this->m_mahasiswa->tampil_data("tb_mahasiswa")->result();
			$this->load->view('mahasiswa/print_mahasiswa',$data);
		}

		public function pdf()
		{
			$this->load->library('pdf');
			$data['mahasiswa'] = $this->m_mahasiswa->tampil_data('tb_mahasiswa')->result();
        	$html = $this->load->view('mahasiswa/laporan_pdf', $data, true);
        	// fuction createPDF($html, $filename='', $download=TRUE, $paper='A4', $orientation='portrait')
        	$this->pdf->createPDF($html, 'mypdf', false);

			/*
			$this->load->library('dompdf_gen');

			$data['mahasiswa'] = $this->m_mahasiswa->tampil_data('tb_mahasiswa')->result();

			$this->load->view('mahasiswa/laporan_pdf',$data);

			$paper_size 	= 'A4';
			$orientation 	= 'landscape';
			$html 			= $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporan_mahasiswa.pdf", ['attachment' =>0]);
			*/
		}

		public function excel()
		{
			$data['mahasiswa'] = $this->m_mahasiswa->tampil_data("tb_mahasiswa")->result();
			// $this->load->view('mahasiswa/print_mahasiswa',$data);
			require(APPPATH. 'PHPExcel/Classes/PHPExcel.php'); 
			require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php'); 

			$object = new PHPExcel();

			$object->getProperties()->setCreator("latihan excel");
			$object->getProperties()->setLastModifiedBy("excel");
			$object->getProperties()->setTitle("daftar mahasiswa");

			$object->setActiveSheetIndex(0);

			$object->getActiveSheet()->setCellValue('A1', 'NO');
			$object->getActiveSheet()->setCellValue('B!', 'NAMA MAHASISWA');
			$object->getActiveSheet()->setCellValue('C1', 'NIM');
			$object->getActiveSheet()->setCellValue('D1', 'TANGGAL LAHIR');
			$object->getActiveSheet()->setCellValue('E1', 'JURUSAN');
			$object->getActiveSheet()->setCellValue('F1', 'ALAMAT');
			$object->getActiveSheet()->setCellValue('G1', 'EMAIL');
			$object->getActiveSheet()->setCellValue('H1', 'NO.TELEPON');

			$baris = 2;
			$no    = 1;

			foreach ($data['mahasiswa'] as $mhs) 
			{
				$object->getActiveSheet()->setCellValue('A'.$baris, $no++);  
				$object->getActiveSheet()->setCellValue('B'.$baris, $mhs->nama);  
				$object->getActiveSheet()->setCellValue('C'.$baris, $mhs->nim);  
				$object->getActiveSheet()->setCellValue('D'.$baris, $mhs->tgl_lahir);  
				$object->getActiveSheet()->setCellValue('E'.$baris, $mhs->jurusan);  
				$object->getActiveSheet()->setCellValue('F'.$baris, $mhs->alamat);  
				$object->getActiveSheet()->setCellValue('G'.$baris, $mhs->email);  
				$object->getActiveSheet()->setCellValue('H'.$baris, $mhs->no_telp); 

				$baris++; 
				// code...
			}

			$filename = "Data_Mahasiswa".'.xlsx';

			$object->getActiveSheet()->setTitle("Data Mahasiswa");

			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename.'"');
			header('Cache-Control:max-age=0');

			$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
			$writer->save('php://output');

			exit;

		}

		public function search()
		{
			$keyword 			= $this->input->post('keyword');
			$data['mahasiswa']	= $this->m_mahasiswa->get_keyword($keyword);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('mahasiswa', $data);
			$this->load->view('templates/footer');
		}




	}
?>
 