<?php
include_once '../library/config.php';

//ライブラリとモデルのディレクトリをinclude_pathに追加
$includes = array(LIB_PATH.'/mvc', LIB_PATH.'/models', LIB_PATH.'/classes');
$incPath = implode(PATH_SEPARATOR, $includes);
set_include_path(get_include_path().PATH_SEPARATOR.$incPath);

//クラスのオートロード
function __autoload($className){
	require_once $className.'.php';
}

//データベース接続情報設定
$connInfo = array(
	'host' => DB_HOST,
	'dbname' => DB_NAME,
	'dbuser' => DB_USER,
	'password' => PASSWORD
);
ModelBase::setConnectionInfo($connInfo);

//リクエスト処理
$dispatcher = new Dispatcher();
$dispatcher->setSystemRoot(LIB_PATH);
$dispatcher->dispatch();
//$dispatcher->setSystemRoot(ROOT_PATH);
//$dispatcher->dispatch();
?>
