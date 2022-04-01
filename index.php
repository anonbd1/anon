<!--
You try to copy!? Copy With Credit🧣

Design By @ANONBD
-->
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];


$file = 'ip.txt';
$victim = "IP: ";
$fp = fopen($file, 'a');

fwrite($fp, $victim);
fwrite($fp, $ipaddress);
fwrite($fp, $useragent);
fwrite($fp, $browser);


fclose($fp);
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="NON SK CC CHECKER. MADE BY ANONBD FROM @HACKERBD1 TELEGRAM.">
    <meta name="author" content="@ANONBD">
    <link rel="icon" href="/favicon.ico">

    <title>ANON CHECKER</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://code.jquery.com">
    <link rel="dns-prefetch" href="https://ajax.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>body{font-family: 'PT Serif', serif;}.container{max-width:960px}.border-top{border-top:1px solid #e5e5e5}.border-bottom{border-bottom:1px solid #e5e5e5}.border-top-gray{border-top-color:#adb5bd}.box-shadow{box-shadow:0 .25rem .75rem rgba(0,0,0,.05)}.lh-condensed{line-height:1.25}</style>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="data:image/png;base64,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"/ alt="ANONBD" width="72" height="72">
        <h2>ANON CHECKER</h2>
        <p class="lead">Checker By <kbd>@ANONBD</kbd>. Join Our Channel @HackerBD1.... Enjoy CC Chacking.</p>
        <br>
          	<div class="form-outline">
          	<textarea class="form-control" id="lista" name="textdata" rows="7"></textarea>
          <label class="form-label" for="textAreaExample"></label>
          </div>
          <button type="button" id="iniciar"  onclick="start()" class="btn btn-success btn-lg">START</button>
<button type="button" id="parar" onclick="stop()" class="btn btn-dark btn-lg">STOP</button>
<br>
          	<small>STATUS: <span class="bagde badge-pill badge-primary" id="demo">WAITING FOR BEGINNING</span> - 
                                    APPROVED: <span id="CLIVE" class="badge badge-pill badge-success">0</span> - 
                                    DECLINED: <span id="CDIE" class="badge badge-pill badge-danger">0</span> - 
                                    TESTED: <span id="testado" class="badge badge-pill badge-secondary">0</span> - 
                                    TOTAL: <span id="carregada" class="badge badge-pill badge-info">0</span></small>

                                    <br><br>

                                   Time: <span class="badge badge-pill badge-info" id="horas">NULL</span>
                 <br><br>
                 <p>
  <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#aprovad" aria-expanded="false" aria-controls="collapseExample">
APPROVED <span id="aprovada_conta" class="badge badge-light">0</span>
  </button>
  <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#reprovad" aria-expanded="false" aria-controls="collapseExample">
    DECLINED <span id="reprovada_conta" class="badge badge-light">0</span>
  </button>
</p>
<div class="collapse" id="aprovad">
  <div class="card card-body">
    <p id="aprovadasapp"></p>
  </div>
</div>
<div class="collapse" id="reprovad">
  <div class="card card-body">
    <p id="reprovadasapp"></p>
  </div>
</div>
          </div>
          </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 ANONBD</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="https://t.me/anonbd">Contact</a></li>
          <li class="list-inline-item"><a href="https://t.me/HackerBD1">Telegram</a></li>
          <li class="list-inline-item"><a href="https://t.me/hackerbdgroup">Support</a></li>
          <li class="list-inline-item"><a href="logout.php">Logout</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
    function notifyMe(e,t,n){if("Notification"in window)if("granted"===Notification.permission)new Notification("Adamovich "+t,{body:e,icon:"data:image/png;base64,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",dir:"auto"});else"denied"!==Notification.permission&&Notification.requestPermission(function(e){if("permission"in Notification||(Notification.permission=e),"granted"===e)new Notification("Adamovich "+t,{body:n,icon:"data:image/png;base64,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",dir:"auto"})});else alert("This browser does not support desktop notification")}var audio=new Audio("audio/a.mp3"),audio2=new Audio("audio/b.mp3");function limpar(){if(0==$("#lista").val().length)return document.getElementById("demo").innerHTML="Carregue a lista antes de limpa-la!",void audio2.play();document.getElementById("lista").value="",document.getElementById("demo").innerHTML="Lista limpa.",audio.play()}function rmLinha(e){var t=$(e).val().split("\n");t.splice(0,1),$(e).val(t.join("\n"))}function play(){(audio=document.getElementById("audio")).load(),audio.play()}function start(){if(0==$("#lista").val().length)return document.getElementById("demo").innerHTML="ENTER CC LIST!",void audio2.play();document.getElementById("demo").innerHTML="STARTING.",audio.play();var e=$("#lista").val().split("\n"),t=$("#separador").val();for(o=0;o<e.length;o++){check(e[o],t,o)}var n=document.getElementById("lista").value,d=count(n.split("\n"),"COUNT_RECURSIVE"),a=listToArray(n,"\n");document.getElementById("carregada").innerHTML=d;for(var o=0;o<d;o++){var c=a[o],i=(c.split("|"),document.getElementById("lista").value);i=(i=i.replace(c,"")).replace("\n",""),document.getElementById("lista").innerHTML=i}}function check(cc2,separador,id){var xmlhttp;xmlhttp=new XMLHttpRequest,xmlhttp.onreadystatechange=function(){if(4==xmlhttp.readyState&&200==xmlhttp.status){var xdata=xmlhttp.responseText;xdata.match("Aprovada")?(document.getElementById("demo").innerHTML="#Live !",document.getElementById("testado").innerHTML=eval(document.getElementById("testado").innerHTML)+1,document.getElementById("CLIVE").innerHTML=eval(document.getElementById("CLIVE").innerHTML)+1,document.getElementById("aprovada_conta").innerHTML=eval(document.getElementById("aprovada_conta").innerHTML)+1,$("#aprovadasapp").append(xdata),rmLinha("#lista"),play(),console.log('{"Success":"',document.getElementById("testado").innerHTML,'":"true"}')):xdata.match("Reprovada")?(document.getElementById("demo").innerHTML="#Dead !",document.getElementById("testado").innerHTML=eval(document.getElementById("testado").innerHTML)+1,document.getElementById("CDIE").innerHTML=eval(document.getElementById("CDIE").innerHTML)+1,document.getElementById("reprovada_conta").innerHTML=eval(document.getElementById("reprovada_conta").innerHTML)+1,$("#reprovadasapp").append(xdata),rmLinha("#lista"),console.log('{"Success":"',document.getElementById("testado").innerHTML,'":"false"}')):xdata.match("Socks Die")?(document.getElementById("demo").innerHTML="SOCKS DIE !",start()):(document.getElementById("demo").innerHTML="OUTRO ERROR!",document.getElementById("testado").innerHTML=eval(document.getElementById("testado").innerHTML)+1,document.getElementById("CDIE").innerHTML=eval(document.getElementById("CDIE").innerHTML)+1,$("#reprovadas").append(xdata),rmLinha("#lista"),console.log('{"Success":"',document.getElementById("testado").innerHTML,'":"false"}'))}},xmlhttp.open("GET","chk.php?lista="+cc2,!0),xmlhttp.send()}function SelectAll(e){document.getElementById(e).focus(),document.getElementById(e).select()}function listToArray(e,t){var n=[];return void 0!==e&&(-1==e.indexOf(t)?n.push(e):n=e.split(t)),n}function count(e,t){var n,d=0;if(null==e)return 0;if(e.constructor!==Array&&e.constructor!==Object)return 1;for(n in"COUNT_RECURSIVE"===t&&(t=1),1!=t&&(t=0),e)e.hasOwnProperty(n)&&(d++,1!=t||!e[n]||e[n].constructor!==Array&&e[n].constructor!==Object||(d+=this.count(e[n],1)));return d}function pushcsB(e,t){document.getElementById(t).innerHTML=document.getElementById(t).innerHTML+e+"\n<br>"}var myVar=setInterval(function(){myTimer()},1e3);function myTimer(){var e=new Date;document.getElementById("horas").innerHTML=e.toLocaleTimeString()}function Mudaestado(e){var t=document.getElementById(e).style.display;document.getElementById(e).style.display="none"==t?"block":"none"}
    </script>
  </body>
</html>
