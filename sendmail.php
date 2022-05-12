<?php
if($_POST["message"]) {
	mail("daniel@nettelfield.com", "Here is the subject line",
	$_POST["message"]. "From: daniel.nettelfield@gmail.com");
?>

