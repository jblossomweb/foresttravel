<?php require_once 'mysql.php';

class query {

	function __construct(){
		$this->db = new mysql(); // connect
	}

	function __destruct(){
		$this->db = null; // disconnect
	}

	function save($rows){
		foreach($rows as $row){
			$this->insert($row);
		}
	}

	function insert($row){
		extract($row);
		if(!$label || !$value){
			return false;
		}
		$this->db->query("
			INSERT INTO `table` (
				`label`,
				`value`
			)
			VALUES (
				:label,
				:value
			);
		",array(
			':label'	=> $label,
			':value'	=> $value
		));
	}

}