<?php 

	class Jamdetik extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function index() 
		{
			//ini mending jangan diubah biar ga ribet
			$data['inputan'] = $this->input->post('satuan');

			//Rumus/konstanta diganti sesuai konversi masing2
			$hasil['hitung'] = $data['inputan'] * 3600;

			//Ini diganti sesuai nama kelompok & view masing2
			$this->load->view('kelompok5/v_jamdetik',$hasil);	
		}

	}
?>
