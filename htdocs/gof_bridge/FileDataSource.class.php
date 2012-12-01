<?php
require_once 'DataSource.class.php';

class FileDataSource implements DataSource{
	private $source_name;
	private $handler;
	
	function __construct($source_name){
		$this->source_name = $source_name;
	}
	
	function open(){
		if(!is_readable($this->source_name)){
			throw new Exception('データソースが見つかりません');
		}
		$this->handler =fopen($this->source_name, 'r');
		if(!$this->handler){
			throw new Exception('データソースの取得に失敗しました');
		}
	}
	
	function read(){
		$buffer = array();
		while(!feof($this->handler)){
			$buffer[] = fgets($this->handler);
		}
		return join($buffer);
	}
	
	function close(){
		if(!is_null($this->handler)){
			fclose($this->handler);
		}
	}
}
?>
