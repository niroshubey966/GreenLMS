<?php 
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'knmtuniversity';
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
$db=mysqli_select_db($conn,$mysql_db);
if(!$conn || !$db ){
    die(mysqli_error($conn));
}
?>