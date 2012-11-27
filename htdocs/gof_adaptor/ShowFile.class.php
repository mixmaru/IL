<?php
class ShowFile {
	private $filename;
	
	public function __construct($filename) {
		if(!is_readable($filename)){
			throw new Exception('ひらけまへん');
		}
		$this->filename = $filename;
	}
	
	public function showPlain(){
		echo '<pre>';
		echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES);
		echo '<pre>';
	}
	
	public function showHightlight(){
		highlight_file($this->filename);
	}
}

try{
	$show_file = new ShowFile('../index.php');
}  catch (Exception $e){
	die($e->getMessage());
}

$show_file->showPlain();
echo '<hr>';
$show_file->showHightlight();
?>
