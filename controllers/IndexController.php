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
		require_once("Smarty/Smarty.class.php");
		$this->view = new Smarty();
		$this->view->template_dir = $_SERVER['DOCUMENT_ROOT'].'/templates';
		
		//cssの読み込み準備
		if(count($this->css_array) > 0){
			$array = null;
			for( $i=0; $i<count($this->css_array); $i++ ){
				$array[$i] = '<link href="'.$this->css_array[$i].'" rel="stylesheet" type="text/css">';
			}
			$this->css = implode('', $array);
		}
		//jsの読み込み準備
		if(count($this->js_array) > 0){
			$array = null;
			for( $i=0; $i<count($this->js_array); $i++ ){
				$array[$i] = '<script type="text/javascript" src="'.$this->js_array[$i].'" ></script>';
			}
			$this->js = implode('', $array);
		}
	}
	
	public function indexAction(){
		if($this->css){
			$this->view->assign('css', $this->css);
		}
		if($this->js){
			$this->view->assign('js', $this->js);
		}
		$this->view->assign('title', 'PicLip');
		$this->view->assign('main_tpl', 'index.tpl');
		$this->view->display('layout.tpl');
	}
}
?>