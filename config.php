<?php 

$server = "localhost";
$user = "u-210079573";
$pass = "mg2b6SZ0wRqVmpb";
$database = "u_210079573_AstonCV";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>