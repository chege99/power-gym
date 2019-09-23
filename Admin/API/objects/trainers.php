<?php
/**
 * 
 */
class Trainers
{
	private $table_name="";
	private $conn;

	//object properties
	public $trainer_id;


	//db connection
	function __construct($db)
	{
		$this->conn=$db;
	}

	function create(){
		
	}
}

?>