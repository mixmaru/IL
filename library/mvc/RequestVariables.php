<?php
abstract class RequestVariables{

	protected $_values;
	
	public function __construct(){
		$this->setValues();
	}
	
	//パラメータ設定値
	abstract protected function setValues();
	
	//指定キーのパラメータを取得
	public function get($key = null){
		$ret = null;
		if($key == null){
			$ret = $this->_values;
		}else{
			if($this->has($key) == true){
				$ret = $this->_values[$key];
			}
		}
		return $ret;
	}
	
	//指定のキーが存在するか確認
	public function has($key){
		if(false == array_key_exists($key, $this->_values)){
			return false;
		}
		return true;
	}

}


?>