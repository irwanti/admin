<?php
	class model_image extends CI_Model{
		//var $tabel = 'tb_image';

		public function __construct() {
			parent:: __construct();
		}

		//Get Gambar
		function get_allimage($config) {
			// $query = $this->db->get('tb_image');
   //      	return $query->result();

			$hasilquery = $this->db->get('tb_image', $config['per_page'], $this->uri->segment(3));
	        if($hasilquery->num_rows() > 0) {
	            foreach ($hasilquery->result() as $value) {
	                $data[] = $value;
	            }
	            return $data;
	        }

		}

		//Detail
		function detail_image($id) {
			// $this->db->where('id', $id);
			// $query = $this->db->get('tb_image');
			// return $query->result();
			$query=$this->db->query("SELECT *
                                  FROM tb_image 
                                  WHERE id = $id");
			return $query->result_array();
		}

	}
?>