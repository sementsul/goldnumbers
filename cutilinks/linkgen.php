<html>
 <head>
  <meta charset="utf-8">
  <title>Сократитель ссылок</title>

<style>
   div {
    width: 330px;	height: 150px; /* Размеры */
    background: #fc0; /* Цвет фона */
    outline: 2px solid #000; /* Чёрная рамка */
    border: 3px solid #fff; /* Белая рамка */
    border-radius: 10px; /* Радиус скругления */
   }
  </style>

   </head>
  <body>

<?

$homedir = "https://xn----htbwkmd.xn--p1ai/cutilinks/";

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>
<? echo("<h1>Сократитель ссылок:</h1>"); ?>
<div>Вставьте ссылку для сокращения: <form method="POST">
    <input style="display: inline;" type='text' name='pole1' size='20' maxlength='1000' value='https://xn----htbwkmd.xn--p1ai/'><br><br>
Вставьте ссылку для установки: referrer<br><input style="display: inline;" type='text' name='pole2' size='20' maxlength='1000' value='https://xn----htbwkmd.xn--p1ai/'><br><br>
    <input style="cursor:pointer;display: inline;" type="submit" name="button_id" value="Сократить" />

</form>
<?php
 
# Если кнопка нажата
    if(isset( $_POST['button_id']))
    {
        $a = $_POST['pole1'];
        $b = $_POST['pole2'];
 
        if (filter_var($a, FILTER_VALIDATE_URL) === FALSE) {
    die('Not a valid URL');
} }
?>

<?php
if (empty($a)) {
		exit;	}    
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: video-g6swmAP8X5VG4jCi.mp4 
echo 'Ваша ссылка-';

$ra = substr($_SERVER[REQUEST_URI] , strpos($_SERVER[REQUEST_URI] , "?") + 1);



$today = date("m.d.y");

$file = "$today".substr(str_shuffle($permitted_chars), 0, 16).'.php';


$ref = "$today".substr(str_shuffle($permitted_chars), 0, 16).'.php';


$stat = "$today".substr(str_shuffle($permitted_chars), 0, 16).'.txt';


$person = ("<? header('Location: ".$a."'); ?>");
 
$persrr = ('<? curl_setopt($curl, CURLOPT_REFERER, "'.$b.'"); ?>');

$refinc = ('<? include("'.$ref.'"); ?>');

$stvd = ('<? include("stat.php?'.$stat.'"); ?>');


file_put_contents($ref, $stvd, FILE_APPEND | LOCK_EX);




file_put_contents($file, $refinc, FILE_APPEND | LOCK_EX);



file_put_contents($ref, $persrr, FILE_APPEND | LOCK_EX);

file_put_contents($file, $person, FILE_APPEND | LOCK_EX);



$filecuti = "$homedir" . "$file";



$yalink = file_get_contents("https://clck.ru/--?url=$filecuti");



echo "<a href= '$yalink'>$yalink</a>";


?>
</div>
</body></html>
 
