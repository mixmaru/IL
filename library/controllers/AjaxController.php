<?php
class AjaxController{
	private $request;
	//private $view;//smarty用
	private $model;
	private $images;
	private $user_id = 1;
	
	public function __construct(){
		try{
			$this->request = new Request();
			$this->model = new IndexModel();
			$this->images = new Images($this->user_id);
		}catch (PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		//smarty
		//$this->view = new View($this->css_array, $this->js_array);
	}
	
	public function imagesAction(){
		$start = $this->request->getQuery('start');
		$limit = $this->request->getQuery('limit');
		echo 'ok'.$start.$limit;
	}
}
?>
