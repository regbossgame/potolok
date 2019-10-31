<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="viewport" content="width=1024"/>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/lightbox-2.6.min.js"></script>
  <script src="java.js"></script>
  <?
  if ($str=="video" || $str=="main"){
	  echo '
	  <script type="text/javascript" src="player/flowplayer-3.2.2.min.js"></script>
	  ';
	  
  }
  ?>
  <title><? echo $tit[$str] ?></title>
  </head>
  <body onload="first();">
  
  <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42621684 = new Ya.Metrika({ id:42621684, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42621684" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
  
  <center>
  
  <img class="rim2" id="tels" src="images/trybka1.png" onClick="showmod(1);">
  
  <div class="zakaz" id="mod1" style="display:none;">
  <span style="cursor:pointer;color:#C93333;float:right;margin-right:5px;font-size:16pt;" onClick="showmod(0);">x</span>
  <br>
  <span style="font-size:12pt;"><strong>Оставить заявку</strong></span>
  <br>
  <span style="font-size:10pt;">Мы Вам перезвоним</span>
  <form action="addmsg.php" method="POST">
  <br>
  <br>
  <input type="text" placeholder="Ваше имя" name="name" maxlength=50/>
  <br>
  <br>
  <input type="text" placeholder="Ваш телефон" name="tel" maxlength=20/>
  <br>
  <br>
  <input type="text" placeholder="Время звонка" name="when" maxlength=20/>
  <br>
  <br>
  <input type="submit" style="cursor:pointer;margin-left:-3px;width:138px;background-color:#e9af24;" value="Отправить"/>
  </form>
  </div>
  
<?
if ($_GET["msg"]!=""){
  if ($_GET["msg"]==1){$t1="Сообщение отправлено!";$t2="Ожидайте звонка";}else{$t1="НЕ УДАЛОСЬ отправить!";$t2="Попробуйте позднее<br>или позвоните по номерам с сайта!";}
  echo '<div class="zakaz">
  <a href="index.php"><span style="cursor:pointer;color:#C93333;float:right;margin-right:5px;font-size:16pt;">x</span></a>
  <br>
  <br>
  <br>
  <br>
  <br>
  <span style="font-size:12pt;"><strong>'.$t1.'</strong></span>
  <br>
  <span style="font-size:10pt;">'.$t2.'</span>
  
</div>';}
 /*
 			<div class="rim" style="margin-top:5px;float:right;cursor:pointer;" onClick="showmod(1);">
				<span style="font-size:11pt;">звоните прямо сейчас!</span><br>
				<span style="font-size:24pt;">8(928) 62-61-200</span><br>
				<span style="font-size:24pt;">8(904) 44-74-408</span><br>
				<span style="font-size:11pt;">или закажите обратный звонок</span>
			</div>
 */
 ?>
  
    <div style="width:900px;">
		<div class="block" style="height:170px;">
		<img src="images/logo.png"  style="float:left;margin-left:28px;margin-top:28px;" onClick="showmod(1);">
		<img src="images/like.png" class="rim" height=64px style="float:right;margin-right:34px;margin-top:20px;padding:0px;" onClick="showmod(1);">
		
			<div class="rim" style="margin-right:75px;margin-top:20px;float:right;cursor:pointer;" onClick="showmod(1);">
				<span style="font-size:11pt;">Звоните прямо сейчас!</span><br>
				<span style="font-size:26pt;">8(928) 62-61-200</span><br>
				
				<span style="font-size:11pt;">или закажите обратный звонок</span>
			</div>
<div style="clear:both;color:#bc1b3e;font-size:12pt;">
<strong>
		Материалы без запаха, все сертификаты качества и безопасности, гарантия! г. Таганрог
</strong>
</div>		
<?
 include "men.php";
 ?>
		</div>