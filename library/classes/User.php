<?php
class User {
	private $id;
	private $name;
	private $profile_image_path;
	private $profile_text;
	private $created;
	private $last_modified;
	private $is_deleted;
	private $model;
	
	public function __construct($user_id = null) {
		try{
			$this->model = new ModelBase();
		}catch (PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		if($user_id){
			$table_name = 'users';
			$sql = sprintf('select * from %s where id = :user_id', $table_name);
			$params = array(
			    'user_id' => $user_id
			);
			$row = $this->model->query($sql, $params);
			if(count($row) == 1){
				foreach($row as $val){
					$this->id = $val['id'];
					$this->name = $val['name'];
					$this->profile_image_path = $this->createImagePath($val['profile_image_name']);
					$this->profile_text = $val['profile_text'];
					$this->created = $val['created'];
					$this->last_modified = $val['last_modified'];
					$this->is_deleted = $val['is_deleted'];
				}
			}
		}
	}
	public function getName($escape_flag = false){
		if($escape_flag){
			return Escape::htmlEscape($this->name);
		}else{
			return $this->name;
		}
	}
	public function getProfileText($escape_flag = false){
		if($escape_flag){
			return Escape::htmlEscape($this->profile_text);
		}else{
			return $this->profile_text;
		}
	}
	public function getProfileImagePath($escape_flag = false){
		if($escape_flag){
			return Escape::htmlEscape($this->profile_image_path);
		}else{
			return $this->profile_image_path;
		}
	}
	
	private function createImagePath($image_name){
		$path = '/files/profile_image/'.$this->id.'/'.$image_name;
		return $path;
	}
}
?>
