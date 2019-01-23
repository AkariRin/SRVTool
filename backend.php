<?php
function log($serverip,$isSRV,$port,$domain)
{
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("连接失败: " . $conn->connect_error);}
$sql = "INSERT INTO logs (ServerIP, isSRV, port, domain)
VALUES ('$serverip', '$isSRV', '$port', '$domain')";
$conn->close();
}
?>