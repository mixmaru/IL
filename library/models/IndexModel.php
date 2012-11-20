<?php
class IndexModel extends ModelBase{
	//ユーザー名前取得
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
			return $user_name;
		}else{
			return false;
		}
	}
	
	//ユーザープロフィール文取得
	public function getProfileText($user_id){
		$table_name = 'users';
		$sql = sprintf('select profile_text from %s where id = :user_id', $table_name);
		$params = array(
		    'user_id' => $user_id
		);
		$row = $this->query($sql, $params);
		if(count($row) == 1){
			foreach($row as $val){
				$profile_text = $val['profile_text'];
			}
			return $profile_text;
		}else{
			return false;
		}

		
	}
	
}

?>
