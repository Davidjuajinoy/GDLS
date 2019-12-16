<?php 

require_once('core/core.php');

$c = isset($_GET['c']) ? $_GET['c'] : "All";
$m = isset($_GET['m']) ? $_GET['m'] : "index";

require_once('controllers/'.$c.'Controller.php');
$c = $c.'Controller';


 
$objeto = new $c();
$objeto->$m(); 
?>