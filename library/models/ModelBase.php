<?php

class ModelBase {
	private static $connInfo;
	protected $db;
	
	public function __construct(){
		$this->initDb();
	}
	
	public function initDb(){
		$dsn = sprintf(
			'mysql:host=%s;dbname=%s;port=3306;',
			self::$connInfo['host'],
			self::$connInfo['dbname']
		);
		$this->db = new PDO($dsn, self::$connInfo['dbuser'], self::$connInfo['password']);
		$this->db->query("SET NAMES utf8");
	}
	
	public static function setConnectionInfo($connInfo){
		self::$connInfo = $connInfo;
	}
	//クエリ結果を取得
	public function query($sql, array $params = array()){
		$stmt = $this->db->prepare($sql);
		if($params != null){
			foreach($params as $key => $val){
				$stmt->bindValue(":".$key, $val);
			}
		}
		$stmt->execute();
		$rows = $stmt->fetchAll();
		return $rows;
	}
	//insertを実行
	public function insert($table_name, array $data){
		$fields = array();
		$values = array();
		foreach($data as $key => $val){
			$fields[] = $key;
			$values[] = ':'.$key;
		}
		$sql = sprintf('insert into %s (%s) value (%s)', $table_name, implode(',', $fields), implode(',', $values));
		$stmt = $this->db->prepare($sql);
		foreach($data as $key => $val){
			$stmt->bindvalue(':'.$key, $val);
		}
		$res = $stmt->execute();
		return $res;
	}
	//deleteを実行
	public function delete($table_name, $where, $params = null){
		$sql = sprintf('delete from %s', $table_name);
		if($where != ''){
			$sql .= ' where '.$where;
		}
		$stmt = $this->db->prepare($sql);
		if($params != null){
			foreach ($params as $key => $val){
				$stmt->bindValue(':'.$key, $value);
			}
		}
		$res = $stmt->excute();
		return $res;
	}
}
?>
