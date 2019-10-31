<?

$tel=$_POST["tel"];
$name=$_POST["name"];
$time=$_POST["when"];

if (($tel=="")||($name=="")){HEADER("LOCATION: index.php?msg=0");die;}

$mail="roman_shevchenko_73@mail.ru";
$from=$mail;

$tema="ЗАКАЗ!";
//$tema = '=?koi8-r?B?'.base64_encode(convert_cyr_string($tema, "w","k")).'?='; // делаем тему понятной почтовым серверам koi-8
//$tema="1";

$msg = 'Имя: '.$name.'
Телефон: '.$tel.'
Время звонка: '.$time.'';
//$msg="Line 1\r\nLine 2\r\nLine 3";
//$msg="1";

$r=mail($mail, $tema, $msg);//, "Content-type: text/html; charset=\"windows-1251\" \r\n Reply-To: $from \r\n", "-f$from");
//echo $tema."-".$msg."<br>";
//echo $r*1;
HEADER("LOCATION: index.php?msg=".($r*1));
?>