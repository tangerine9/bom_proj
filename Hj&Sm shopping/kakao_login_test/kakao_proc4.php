<textarea wrap="soft" class="crayon-plain print-no" data-settings="dblclick" readonly="" style="margin: 0px; padding: 0px 5px; width: 608px; overflow: hidden; height: 383px; opacity: 0; border-width: 0px; box-sizing: border-box; box-shadow: none; border-radius: 0px; -webkit-box-shadow: none; white-space: pre; word-wrap: normal; resize: none; color: rgb(0, 0, 0); tab-size: 4; z-index: 0; font-family: Monaco, MonacoRegular, 'Courier New', monospace !important; font-size: 12px !important; line-height: 15px !important; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"></textarea>
<?php
$CLIENT_ID     = "502bbe37d7a1bb3fc1ef4846394fa470";
$REDIRECT_URI  = "http://delphi16.cafe24.com/pmy/notice/login/kakao_proc.php";
$TOKEN_API_URL = "https://kauth.kakao.com/oauth/token";

$code   = $_GET["code"];
$params = sprintf( 'grant_type=authorization_code&client_id=%s&redirect_uri=%s&code=%s', $CLIENT_ID, $REDIRECT_URI, $code);

$opts = array(
   CURLOPT_URL => $TOKEN_API_URL,
   CURLOPT_SSL_VERIFYPEER => false,
   CURLOPT_SSLVERSION => 1,
   CURLOPT_POST => true,
   CURLOPT_POSTFIELDS => $params,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_HEADER => false
);

$curlSession = curl_init();
curl_setopt_array($curlSession, $opts);
$accessTokenJson = curl_exec($curlSession);
curl_close($curlSession);

echo $accessTokenJson;


//정보얻기
$TOKEN_API_URL = "https://kapi.kakao.com/v1/user/me";

$opts = array(
   CURLOPT_URL => $TOKEN_API_URL,
   CURLOPT_SSL_VERIFYPEER => false,
   CURLOPT_SSLVERSION => 1,
   CURLOPT_POST => true,
   CURLOPT_POSTFIELDS => false,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_HTTPHEADER => array(
"Authorization: Bearer " . $access_token
)
);

$curlSession = curl_init();
curl_setopt_array($curlSession, $opts);
$accessTokenJson = curl_exec($curlSession);
curl_close($curlSession);


?>
