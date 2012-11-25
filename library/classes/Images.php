<?php
class Images {
	private $images_pool;
	private $model;
	
	public function __construct($user_id, $order = "desc"){
		try{
			$this->model = new ModelBase();
		}catch (PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		$table_name = 'images';
		$sql = sprintf("select * from %s where created_user = :user_id order by id %s", $table_name, $order);
		$params = array(
		    "user_id" => $user_id
		);
		$rows = $this->model->query($sql, $params);
		foreach($rows as $value){
			$image = new Image();
			$image->setId($value['id']);
			$image->setName($value['name']);
			$image->setPath('/files/contents_image/'.$user_id.'/'.$value['name']);
			$this->images_pool[] = $image;
		}
	}
	public function getImagesPool(){
		return $this->images_pool;
	}
}

?>
