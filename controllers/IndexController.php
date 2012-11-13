<?php
class IndexController{
	private $view;//smarty用
	private $css_array = array(//このコントローラで表示されるページに必要なcssを指定する
	    '/css/index.css'
	);
	private $css;//assign用
	private $js_array = array(//このコントローラで表示されるページに必要なjsを指定する
	);
	private $js;//assign用
	
	public function __construct(){
		//smarty
		$this->view = new View($this->css_array, $this->js_array);
	}
	
	public function indexAction(){
		$conf = array(
			'title' => 'PicLip',
			'main_tpl' => 'index.tpl',
		);
		$this->view->display('layout.tpl', $conf);
	}
}
?>