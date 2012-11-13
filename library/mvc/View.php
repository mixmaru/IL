<?php
class View {
	private $smarty;
	private $css;
	private $js;
	
	public function __construct($css_array, $js_array){
		require_once("Smarty/Smarty.class.php");
		$this->smarty = new Smarty();
		$this->smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/templates/';
		$this->smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/templates_c/';
		$this->smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/configs/';
		$this->smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/cache/';
		$this->smarty->caching = true;
		
		//cssの読み込み準備
		$count = count($css_array);
		if($count > 0){
			$array = null;
			for( $i=0; $i<$count; $i++ ){
				$array[$i] = '<link href="'.$css_array[$i].'" rel="stylesheet" type="text/css">';
			}
			$this->css = implode('', $array);
		}
		//jsの読み込み準備
		$count = count($js_array);
		if($count > 0){
			$array = null;
			for( $i=0; $i<$count; $i++ ){
				$array[$i] = '<script type="text/javascript" src="'.$js_array[$i].'" ></script>';
			}
			$this->js = implode('', $array);
		}
		
	}
	
	public function display($base_tpl, $obj){
		if($this->css){
			$this->smarty->assign('css', $this->css);
		}
		if($this->js){
			$this->smarty->assign('js', $this->js);
		}
		if($obj){
			foreach($obj as $key => $value){
				$this->smarty->assign($key, $value);
			}
		}
		$this->smarty->display($base_tpl);
	}
	
}

?>
