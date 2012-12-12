<?php
require_once 'Reader.class.php';
abstract class AbstractReader{
	protected $filename;
	protected $handler;
	
	public function __construct($filename){
		if(!is_readable($filename)){
			throw new Exception('file "'.$filename.'" is not readable !');
		}
		$this->filename = $filename;
	}
	
	//abstract public function read();
	//abstract public function display();
}


?>
