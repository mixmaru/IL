<?php
class Image {
	private $id;
	private $name;
	private $path;
	private $tags;
	
	public function __construct(){
		
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getId($escape_flag = false){
		if($escape_flag){
			return Escape::htmlEscape($this->id);
		}
		return $this->id;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getName($escape_flag = false){
		if($escape_flag){
			return Escape::htmlEscape($this->name);
		}
		return $this->name;
	}
	public function setPath($path){
		$this->path = $path;
	}
	public function getPath($escape_flag = false){
		if($escape_flag){
			return Escape::htmlEscape($this->path);
		}
		return $this->path;
	}
}

?>
