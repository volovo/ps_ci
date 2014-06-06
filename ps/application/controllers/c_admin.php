<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}
	public function index()
	{
		
		$data['cqth']=$this->m_admin->get_list_cqth();

		$this->load->view('admin_add_ps', $data);
		
		//print_r($data) ;
	}
	public function home(){
		
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */