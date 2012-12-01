<?php
require_once 'DataSource.class.php';

class Listing{
	private $data_source;
	
	function __construct($data_source){
		$this->data_source = $data_source;
	}
	
	function open(){
		$this->data_source->open();
	}
	
	function read(){
		return $this->data_source->read();
	}
	
	function close(){
		$this->data_source->close();
	}
}
?>
