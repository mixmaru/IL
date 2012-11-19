<?php

class Dispatcher{

	private $sysLib;
	
	public function setSystemRoot($path){
		$this->sysLib = rtrim($path, '/');
	}
	
	public function dispatch(){
		// パラメーター取得（末尾の / は削除）
		$param = ereg_replace('(/\?.*$)|/$', '', $_SERVER['REQUEST_URI']);
		$params = array();
		if($param != ''){
			// パラメーターを / で分割
			$params = explode('/', $param);
		}
		 // １番目のパラメーターをコントローラーとして取得
		$controller = 'index';
		if( count($params) > 0){
			$controller = $params[1];
		}
		// パラメータより取得したコントローラー名によりクラス振分け
		$className = ucfirst(strtolower($controller)).'Controller';
		// クラスファイル読込
		if( file_exists($this->sysLib.'/controllers/'.$className.'.php') ){
			require_once $this->sysLib.'/controllers/'.$className.'.php';
		}else{
			header("HTTP/1.0 404 Not Found");
			exit();
		}
		
		// クラスインスタンス生成
		$controllerInstance = new $className;
		$action = 'index';
		if(count($params) > 2 ){
			$action = $params[2];
		}
		$actionMethod = $action.'Action';
		if(method_exists($controllerInstance, $actionMethod)){
			$controllerInstance->$actionMethod();
		}else{
			header("HTTP/1.0 404 Not Found");
			exit();
		}
	}
	
}

?>