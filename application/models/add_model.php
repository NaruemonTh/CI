<?php
class Add_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function get_row($table){
		$rs=$this->db->get($table);
		return $rs->num_rows(); 
	}
}
?>