<?php

	$fname = "#fname";
	$lname = "#lname";
	
	$msg = "#msg";
	$headers = "From: #email" . "\r\n";

	$to = 'stunneravi@gmail.com';

	mail($to, $fname, $lname,$headers, $msg);
?> 