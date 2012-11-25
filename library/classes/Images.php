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
		$sql = sprintf("select * from %s where created_user = :user_id order by id :order", $table_name);
		$params = array(
		    "user_id" => $user_id,
		    "order" => $order
		);
		$row = $this->model->query($sql, $params);
		//var_dump($sql);
		//var_dump($params);
		//var_dump($row);
		foreach($row as $value){
			try{
				$image = new Image();				
			}catch (Exception $e){
				exit('エラーが発生しました' . $e->getMessage());
			}
		}
	}
}

?>
