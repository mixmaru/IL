<?php
class IndexController{
	private $view;//smarty用
	private $model;
	private $css_array = array(//このコントローラで表示されるページに必要なcssを指定する
	    '/css/index.css'
	);
	private $js_array = array(//このコントローラで表示されるページに必要なjsを指定する
	);
	private $user_id = 1;
	
	public function __construct(){
		try{
			$this->model = new IndexModel();
		}catch (PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		//smarty
		$this->view = new View($this->css_array, $this->js_array);
	}
	
	public function indexAction(){
		try{
			$user_name = $this->model->getUserName($this->user_id);
			$profile_text = $this->model->getProfileText($this->user_id);
		}catch(PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		$view_conf = array(
			'title' => 'PicLip',
			'main_tpl' => 'index.tpl',
			'user_name' => $user_name,
			'profile_text' => $profile_text
		);
		$this->view->display('layout.tpl', $view_conf);
	}
}
?>