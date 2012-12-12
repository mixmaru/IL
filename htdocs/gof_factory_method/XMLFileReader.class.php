<?php
require_once 'AbstractReader.class.php';
require_once 'Reader.class.php';

class XMLFileReader extends AbstractReader implements Reader{
	
	public function read() {
		$this->handler = simplexml_load_file($file->filename);
	}
	
	public function display() {
		foreach($this->handler->artist as $artist){
			echo "<b>".$this->convert($artist["name"])."</b>";
			echo "<ul>";
			foreach($artist->music as $music){
				echo "<li>";
				echo $this->convert($music['name']);
				echo "</li>";
			}
			echo "</ul>";
		}
	}
	
	private function convert($str){
		return mb_comvert_encoding($str, mb_internal_encoding(), "auto");
	}
}
?>
