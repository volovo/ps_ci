<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();

	}
	public function get_list_cqth()
	{
		$query=$this->db->get("cqth");
		return $query->result_array();
	}

	

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */