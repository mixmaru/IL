<?php
require_once './DisplaySourceFile.class.php';
require_once './ShowFile.class.php';

class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile{
	
	public function __construct($filename) {
		parent::__construct($filename);
	}
	
	public function display() {
		parent::showHightlight();
	}
}
?>
