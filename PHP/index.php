<?php
require 'connect.inc.php';
require 'core.inc.php';
if(loggedin()){
getfield();
 
}else{
include 'login.php';
}
?>
