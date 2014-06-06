<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	function index()
	{
		
		//$this->load->model("Mlist");
		//$data['level1']= $this->Mlist->level1_list();
		//$this->load->view("insert");
	}
}
?>