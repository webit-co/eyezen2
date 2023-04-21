test
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
} else {//本番
	$site_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"].'/';
	$file_pass = $_SERVER['DOCUMENT_ROOT'].'/';
}
echo "<br>";
echo $site_url;
echo "<br>";
echo $file_pass;