<?php
class IndexController{
	private $view;//smarty用
	private $model;
	private $user;
	private $css_array = array(//このコントローラで表示されるページに必要なcssを指定する
	    '/css/index.css'
	);
	private $js_array = array(//このコントローラで表示されるページに必要なjsを指定する
	);
	private $user_id = 1;
	
	public function __construct(){
		try{
			$this->model = new IndexModel();
			$this->user = new User($this->user_id);
		}catch (PDOException $e){
			exit('データベースに接続できませんでした。' . $e->getMessage());
		}
		//smarty
		$this->view = new View($this->css_array, $this->js_array);
	}
	
	public function indexAction(){
		$view_conf = array(
			'title' => 'PicLip',
			'main_tpl' => 'index.tpl',
			'user_name' => $this->user->getName(),
			'profile_text' => $this->user->getProfileText()
		);
		$this->view->display('layout.tpl', $view_conf);
	}
}
?>