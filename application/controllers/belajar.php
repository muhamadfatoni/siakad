<?php
	
class Belajar extends CI_Controller{
	public function index()
	{
		$mahasiswa 	 = [];
		$mahasiswa[] = 'nama mahasiswa';

		print_r($mahasiswa);

		$mahasiswa2 = ['nama mahasiswa2'];
		echo '<hr>';
		print_r($mahasiswa2);

		$mahasiswa3 = array(
			0 => 'nama mahasiswa3'
		);
		echo '<hr>';
		print_r($mahasiswa3);

		$mahasiswa4 = array(
			'nama mahasiswa4'
		);
		echo '<hr>';
		print_r($mahasiswa4);

		$mahasiswa5 = [
			'pertama'	=>'nama mahasiswa pertama',
			'kedua'		=>'nama mahasiswa kedua',
			'ketiga'	=>'nama mahasiswa ketiga',
			'keempat'	=>'nama mahasiswa keempat',
		];
		echo '<hr>';
		print_r($mahasiswa5);

		echo '<hr>';
		print_r($mahasiswa5['pertama']);


		$mahasiswa6 = [
			'nama mahasiswa pertama',
			'nama mahasiswa kedua',
			'nama mahasiswa ketiga',
			'nama mahasiswa keempat',
		];
		echo '<hr>';
		print_r($mahasiswa6);

		echo '<hr>';
		echo $mahasiswa6[0];
	}

	public function a() 
	{
		$data  = [
			'nama'		=> '$nama',
			'nim'		=> '$nim',
			'tgl_lahir' => '$tgl_lahir',
			'jurusan'	=> '$jurusan',
			'alamat'	=> '$alamat',
			'email'		=> '$email',
			'no_telp'	=> '$no_telp',
			'hobi'		=> [
				'sepakbola',
				'volly',
				'badminton',
				'catur',

			],

			'WNI' => true,
			'merokok' => false,
			'umur'	=> 40,

		];

		foreach ($data as $key => $value) {
			echo $key.'<br>';
			var_dump($value);
			echo '<hr>';
		}
	}

	public function b()
	{
		$dataMahasiswa  = $this->m_mahasiswa->tampil_data()->result();

		var_dump($dataMahasiswa);
	}

	public function c()
	{
		$dataMahasiswa  = $this->m_mahasiswa->tampil_data()->result();

		var_dump($dataMahasiswa);

		echo '<hr>';
		$dataMahasiswa  = $this->m_mahasiswa->tampil_data()->result();

		print_r($dataMahasiswa);
	}

	public function d()
	{
		$dataMahasiswa  = $this->m_mahasiswa->tampil_data()->result();

		foreach ($dataMahasiswa as $key => $mahasiswa) {
			echo $key.'<br>';
			print_r($mahasiswa);
			echo '<hr>';
		}
	}

	public function e() 
	{
		$data  = [ 
			'nama'		=> '$nama',
			'nim'		=> '$nim',
			'tgl_lahir' => '$tgl_lahir',
			'jurusan'	=> '$jurusan',
			'alamat'	=> '$alamat',
			'email'		=> '$email',
			'no_telp'	=> '$no_telp',
			'hobi'		=> [
				'sepakbola',
				'volly',
				'badminton',
				'catur',

			],

			'WNI' => true,
			'merokok' => false,
			'umur'	=> 40,
			
		];
		foreach ($data as $index => $isi){
		echo $index.'<br>';
		echo json_encode($data);
		echo '<hr>';
		}

	}

	public function f()
	{
		$data = [];
		$data[] = 'riwayat sekolah, tahun lulus, absensi';
				  

		print_r($data);


	}

	public function g()
	{
		$x = "Hello world!";
		$x = null;
 		var_dump($x); 
	}
}