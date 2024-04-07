<?php 
	class Jurusan extends CI_Controller
	{
		function __construct()
		{
	        parent::__construct();
	        $this->load->model('ModelJurusan');
	    }
	    
		public function index()
		{
			$data['jurusans'] = $this->ModelJurusan->getJurusan()->result();
			// foreach ($data as $index => $model) {
			// 	echo $index .'<br>';
			// 	var_dump($model);
			// 	echo '<hr>';
			// }
			$data['page_title']='Data';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('jurusan/index', $data);
			$this->load->view('templates/footer');

		}

	}
?>
