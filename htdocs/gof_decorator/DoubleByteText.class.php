<?php
require_once 'TextDecorator.class.php';

class DoubleByteText extends TextDecorator{
	
	public function __construct(Text $target){
		parent::_construct($target);
	}
	
	public function getText(){
		$str = parent::getText();
		$str = mb_convert_kana($str, "RANSKV");
		return $str;
	}
}
?>
