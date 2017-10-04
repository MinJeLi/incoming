<?php

//	echo $_POST["context"];
	include 'ChatInfo.php';

	$context = "&payload={\"text\":\"".addslashes($_POST["context"])."\"}";
	$total = $Link.$context;
//	echo $total;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $total);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_exec($ch);
	curl_close($ch);
?>

<html>
<head>
	<meta http-equiv="refresh" content="0;url=https://mjleehome.familyds.com:4433/" />
</head>
