<?php

class Request{
	
	//POSTパラメータ
	private $_post;
	//GETパラメータ
	private $_query;
	
	public function __construct(){
		$this->_post = new Post();
		$this->_query = new QueryString();
	}
	
	//POST変数所得
	public function getPost($key = null){
		if($key == null){
			return $this->_post->get();
		}
		if($this->_post->has($key) == false){
			return null;
		}
		return $this->_post->get($key);
	}
	
	//GET変数取得
	public function getQuery($key = null){
		if($key == null){
			return $this->_query->get();
		}
		if($this->_query->has($key) == false){
			return null;
		}
		return $this->_query->get($key);
	}
}

?>