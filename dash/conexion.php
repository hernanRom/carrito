<?php  
$mysqli = new mysqli("localhost", "root","","travel2020");  
/* check connection */
if ($mysqli->connect_errno) {  
    printf("Connect failed: %s\n", $mysqli->connect_error);  
    exit();  
}  
if(!$mysqli->set_charset("utf8")) {  
    printf("Error loading character set utf8: %s\n", $mysqli->error);  
    exit();  
}

$pathRoot='http://localhost/travel2022/';
?>







