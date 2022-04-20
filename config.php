<?php 
/*
$server = "innodb.endora.cz";
$username = "spalet1646394871";
$password = "78+nYc*C%!sH6+YI";
$database = "spalet1646394871";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}
*/
//  LOCAL HOST SETUP    

$server = "localhost";
$username = "root";
$password = "";
$database = "rada";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>
