<?php
require_once 'News.class.php';
require_once 'NewsBuilder.class.php';

class RssNewsBuilder implements NewsBuilder{
	public function parse($url){
		$data = simplexml_load_file($url);
	}
}
?>
