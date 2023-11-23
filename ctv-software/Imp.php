<?php
$name = "not valid";
$age = "не определен";
if(isset($_GET["name"])){
  
    $name = $_GET["name"];
}
if(isset($_GET["age"])){
  
    $age = $_GET["age"];
}
readfile('/./index.html');
?>
