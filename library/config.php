<?php
//システムルートディレクトリ
define('ROOT_PATH', realpath(dirname(__FILE__).'/..'));
//ライブラリのディレクトリパス
define('LIB_PATH', realpath(dirname(__FILE__).'/../library'));
//filesのディレクトリパス
define('FILES', $_SERVER['DOCUMENT_ROOT'].'/files');
//profile_imageのディレクトリパス
define('PROFILE_IMAGE', FILES.'/profile_image');
//contents_imageのディレクトリパス
define('CONTENTS_IMAGE', FILES.'/contents_image');
//mysql設定
define('DB_HOST', 'localhost');
define('DB_NAME', 'piclip');
define('DB_USER', 'shin');
define('PASSWORD', '5963');

require_once LIB_PATH.'/classes/Escape.php'
?>
