<?php
// echo basename($_SERVER['PHP_SELF']);
if(isset($_SESSION['lang'])){
  $lang_selected=$_SESSION['lang'];
}else{

  $lang_selected = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
}


if($lang_selected != 'es'){
  $lang_selected = 'en';
}
$_SESSION['lang']= $lang_selected;

if(!isset($_SESSION['lang'])){
  $_SESSION['lang'] = 'en';
}else if(isset($_GET['lang'])&& $_SESSION['lang']!= $_GET['lang'] && !empty($_GET['lang'])){
  $_SESSION['lang']= $_GET['lang'];
}

  require_once "lenguajes/". $_SESSION['lang'] .".php";
 ?>
