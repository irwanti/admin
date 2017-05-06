<?php
	defined ('BASEPATH') OR exit ('No direct script access allowed');

	class Cimage extends CI_Controller {

		public function __construct() {
			
			parent:: __construct();
			$this->load->model('model_image');
			$this->load->helper('url');
		}

		public function index() {
			$config['base_url'] = base_url()."index.php/cimage/index";
			$config['total_rows'] = $this->db->query("SELECT * FROM tb_image;")->num_rows();
			$config['per_page'] = 3;
			$config['num_links'] = 2;
			$config['uri_segment'] = 3;

			//Style
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] = "</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = "<li>";
			$config['next_tag_close'] ="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tag_close'] = "</li>";
			$config['first_tag_open'] = "<li>";
			$config['first_tag_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tag_close'] = "</li>";

			$config['first_link'] = ' First ';
			$config['last_link'] = ' Last ';
			$config['next_link'] = '> ';
			$config['prev_link'] = '< ';
			$this->pagination->initialize($config);

			$this->data['query'] = $this->model_image->get_allimage($config);

			$this->load->view('content', $this->data);
		}

		public function detaildata() {
			$id = $_POST['id'];
			$data['gambar'] = $this->model_image->detail_image($id);
			$this->load->view("modal", $data);	
		}


	}

?>
