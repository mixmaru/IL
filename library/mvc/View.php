<?php
class View {
	private $smarty;
	private $css;
	private $js;
	
	public function __construct($css_array, $js_array){
		require_once("Smarty/Smarty.class.php");
		$this->smarty = new Smarty();
		$this->smarty->template_dir = LIB_PATH.'/view/templates/';
		$this->smarty->compile_dir = LIB_PATH.'/view/templates_c/';
		$this->smarty->config_dir = LIB_PATH.'/view/configs/';
		$this->smarty->cache_dir = LIB_PATH.'/view/cache/';
		$this->smarty->caching = false;
		
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
				$this->smarty->assign($key, htmlentities($value, ENT_QUOTES, 'utf-8'));
			}
		}
		$this->smarty->display($base_tpl);
	}
	
}

?>
