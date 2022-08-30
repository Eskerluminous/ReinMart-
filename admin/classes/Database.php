<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "root", "ReinMart ecom");
		return $this->con;
	}
}

?>