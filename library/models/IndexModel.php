<?php
class IndexModel extends ModelBase{
	
	public function getUserName($user_id){
		$sql = 'select name from user where id = :user_id';
		$params = array(
		    'user_id' => $user_id
		);
		$row = $this->query($sql, $params);
		var_dump($row);
		return $row;
	}
}

?>
