<?php
class SingletonSample{
	private $id;
	private static $instance;
	private function __construct(){
		$this->id = md5(date('r').mt_rand());
	}
	
	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new singletonSample();
			echo 'new singletonSample';
		}
		return self::$instance;
	}
	
	public function getID(){
		return $this->id;
	}
	
	public final function __clone(){
		throw new RuntimeException('Clone is not allowed against '.get_class($this));
	}
}
?>
