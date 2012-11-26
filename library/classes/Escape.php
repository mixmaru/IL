<?php
class Escape {
	public static function htmlEscape($value){
		return htmlentities($value, ENT_QUOTES, 'utf-8');
	}
}

?>
