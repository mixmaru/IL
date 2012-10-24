<?php
class Rss{
	private $url;
	private $xml_obj;
	
	public function __construct($url){
		$this->url = $url;
		$this->pullRss();
	}
	
	private function pullRss(){
		$this->xml_obj = simplexml_load_file($this->url,'SimpleXMLElement', LIBXML_NOCDATA);
	}
	
	public function getRss(){
		return $this->xml_obj;
	}

}
?>