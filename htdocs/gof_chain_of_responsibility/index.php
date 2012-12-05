<?php
require_once 'MaxLengthValidationHandler.class.php';
require_once 'NotNullValidationHandler.class.php';

if(isset($_POST['validate_type']) && isset($_POST['input'])){
	$validate_type = $_POST['validate_type'];
	$input = $_POST['input'];
	
	$not_null_handler = new NotNullValidationHanlder();
	$length_handler = new MaxLengthValidationHandler(8);
	
	$option_handler = null;
	switch($validate_type){
		case 1:
			include_once 'AlphabetValidationHandler.class.php';
			$option_handler = new AlphabedValidationHandler();
			break;
		case 2:
			include_once 'NumberValidationHandler.class.php';
			$option_handler = new NumberValidationHandler();
			break;
	}
	
	if(!is_null($option_handler)){
		$length_handler->setHandler($option_handler);
	}
	$handler = $not_null_handler->setHandler($length_handler);
}
?>
<form action="" method="post">
	<div>
		値：<input type="text" name="input">
	</div>
	<div>
		検証内容：<select name="validate_type">
			<option value="0">任意</option>
			<option value="1">半角英字で入力されているか</option>
			<option value="2">半角数字で入力されているか</option>
		</select>
	</div>
	<div>
		<input type="submit">
	</div>
</form>
