<?php
session_start();
require_once 'config.php';
require_once 'helpers/system_helpers.php';
function __autoload($class_name){
require_once 'lib/'.$class_name. '.php';
}



?>



