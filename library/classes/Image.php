<?php
class Image {
	private $name;
	private $path;
	private $tags;
	private $model;
	
	public function __construct($image_id = null){
		try{
			$this->model = new ModelBase();
		}catch (PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		if($image_id){
			$table_name = 'images';
			$sql = sprintf('select * from %s where :image_id', $table_name);
			$params = array(
			    'image_id' => $image_id
			);
			$row = $this->model->query($sql, $params);
			if(count($row)==1){
				foreach($row as $value){
					$this->name = $value['name'];
					$this->path = '/files/contents_image/'.$value['created_user'].'/'.$value['name'];
				}
			}
		}
	}
}

?>
