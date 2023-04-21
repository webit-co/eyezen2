<?php
if ($ua_type == "others") {
	if ($page_name == "works") {
		//リダイレクト
		$redirect_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		header('Location: ' . $redirect_url);
	}
	include($file_pass."include/header.php");
	include($file_pass."pc/$page_name.php");
	include($file_pass."include/footer.php");
} else {
	// include($file_pass."sp/$page_name.php");

	include($file_pass."include/header.php");
	include($file_pass."include/sp_nav.php");
	include($file_pass."sp/$page_name.php");
	include($file_pass."include/footer.php");
}