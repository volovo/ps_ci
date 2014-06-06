<?php
class Mlist extends Model{

	function __construct()
	{
		parent::Model();
	}
	function level1_list()
	{
		$sql="select * from level1";
		$query=$this->db->query($sql);
		if($query->num_rows() > 0)
		{
		return $query->result_array();
		}
		return 0;
	}
}
?>