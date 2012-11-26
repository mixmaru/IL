<?php
class Images {
	private $images_pool;
	private $model;
	private $user_id;
	
	public function __construct($user_id, $order = "desc"){
		try{
			$this->model = new ModelBase();
		}catch (PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		$this->user_id = $user_id;
	}
	public function getImages($start, $limit){
		$table_name = 'images';
		$order = 'desc';
		$sql = sprintf("select * from %s where created_user = :user_id order by id %s", $table_name, $order);
		$params = array(
		    "user_id" => $this->user_id
		);
		$rows = $this->model->query($sql, $params);
		foreach($rows as $value){
			$image = new Image();
			$image->setId($value['id']);
			$image->setName($value['name']);
			$image->setPath('/files/contents_image/'.$this->user_id.'/'.$value['name']);
			$this->images_pool[] = $image;
		}
	}
}
?>
