<?php
$site_host = $_SERVER["HTTP_HOST"];

$slug = explode('/', $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);

if ($_SERVER['SERVER_NAME'] == 'localhost') {//ローカルホスト用
	$site_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]. '/' .$slug[1]. '/';
	$file_pass = $_SERVER['DOCUMENT_ROOT'].'/eyezen2/';// ファイルURLデータ
	define("CONSTANT", "Hello world.");
} elseif ($_SERVER['SERVER_NAME'] == 'smad-test.sub.jp') {//testsite
	$site_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]. '/eyezen/';
	$file_pass = $_SERVER['DOCUMENT_ROOT'].'/eyezen/';
} elseif ($_SERVER['SERVER_NAME'] == 'smad.sakura.ne.jp') {//ドメイン無し本番
	$site_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]. '/eyezen2/';
	$file_pass = $_SERVER['DOCUMENT_ROOT'].'/eyezen2/';
} else {//本番
	$site_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"].'/';
	$file_pass = $_SERVER['DOCUMENT_ROOT'].'/';
}


// デバイス判定
require_once ( $file_pass.'require/ua.class.php' );
// main.tpl内にて判定しtplの出しわけを行う
$ua = new UserAgent();
if($ua->set() === "mobile") {
	$ua_type = 'mobile';
}elseif($ua->set() === "tablet"){
	$ua_type = 'tablet';
}else{
	$ua_type = 'others';
}



include($file_pass."require/site_data.php");

?>