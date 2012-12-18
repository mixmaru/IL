<?php

class User {
	private $id;
	private $name;
	private $profile_image_path;
	private $profile_text;
	private $created;
	private $last_modified;
	private $is_deleted;
	
	//idセット
	public function setId($id = null){
		if($id == null){
			return false;
		}
		if(!is_numeric($id)){
			return false;
		}
		$this->id = $id;
	}
	
	//id取得
	public function getId(){
		return $this->id;
	}
	
	//nameセット
	public function setName($name = null){
		if($name == null || is_bool($name)){
			return false;
		}
		$name = (string)$name;
		$this->name = $name;
	}
	
}

?>
