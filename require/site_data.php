<?php
$url = $_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF'];

$page_name = "";

//タイム
$nowtime = date( "YmdHi" );

if (strstr($url, '/aboutus')) {
	$page_name = "aboutus";
	$page_title = "株式会社アイゼンの紹介|株式会社アイゼン";
	$keywords = "";
	$description = "";
} elseif (strstr($url, '/technique')) {
	$page_name = "technique";
	$page_title = "技術|株式会社アイゼン";
	$keywords = "";
	$description = "";
} elseif (strstr($url, '/products')) {
	$page_name = "products";
	$page_title = "制作|株式会社アイゼン";
	$keywords = "";
	$description = "";
} elseif (strstr($url, '/gallery')) {
	$page_name = "gallery";
	$page_title = "動画紹介|株式会社アイゼン";
	$keywords = "";
	$description = "";
} elseif (strstr($url, '/recruit')) {
	$page_name = "recruit";
	$page_title = "採用情報|株式会社アイゼン";
	$keywords = "";
	$description = "";
} elseif (strstr($url, '/contact')) {
	$page_name = "contact";
	$page_title = "contact|株式会社アイゼン";
	$keywords = "";
	$description = "";
} elseif (strstr($url, '/works')) {
	$page_name = "works";
	$page_title = "works|株式会社アイゼン";
	$keywords = "";
	$description = "";
} else {
	$page_name = "index";
	$page_title = "株式会社アイゼン| 映像撮影・制作会社|大阪市浪速";
	$keywords = "";
	$description = "株式会社アイゼンは、大阪にある撮影から編集までカバーする映像技術会社です。スポーツやバラエティ、ドキュメンタリーなど国内外を問わない撮影実績。EOS C300、FS700Jといったシネスタイルのカメラを使用した企業CM.VP.PVの撮影もお任せ下さい。";
}

