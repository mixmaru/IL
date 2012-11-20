<?php
class IndexModel extends ModelBase{
	
	public function getUserName($user_id){
		$sql = 'select name from users where id = :user_id';
		$params = array(
		    'user_id' => $user_id
		);
		$row = $this->query($sql, $params);
		if(count($row) == 1){
			foreach($row as $val){
				$user_name = $val['name'];
			}
		}
		return $user_name;
	}
}

?>
