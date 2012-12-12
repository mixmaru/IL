<?php
require_once 'AbstractReader.class.php';
require_once 'Reader.class.php';

class CSVFileReader extends AbstractReader{
	
	public function read() {
		$this->handler = fopen($this->filename, "r");
	}
	
	public function display() {
		$column = 0;
		$tmp = "";
		while($data = fgetcsv ($this->handler, 1000, ",")){
		$num = count ($data);
			for ($c = 0; $c < $num; $c++) {
				if($c == 0) {
					if($column != 0 && $data[$c] != $tmp) {
						echo "</ul>";
					}
					if($data[$c] != $tmp) {
						echo "<b>" . $data[$c] . "</b>";
						echo "<ul>";
						$tmp = $data[$c];
					}
				}else {
					echo "<li>";
					echo $data[$c];
					echo "</li>";
				}
			}
			$column++;
		}
		echo "</ul>";
		fclose($this->handler);
	}

}
?>
