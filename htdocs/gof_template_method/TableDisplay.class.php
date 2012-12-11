<?php
require_once 'AbstractDisplay.class.php';

class TableDisplay extends AbstractDisplay{
	protected function displayBody() {
		echo '<table border="1" cellpadding="2" cellspacing="2">';
	}

	protected function displayFooter() {
		foreach($this->getData() as $key => $value){
			echo '<tr>';
			echo '<th>'.$key.'</td>';
			echo '<td>'.$value.'</td>';
			echo '</tr>';
		}
	}

	protected function displayHeader() {
		echo '</table>';
	}
}
?>
