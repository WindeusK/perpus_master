<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "perpus_master";

$conn = new mysqli($server, $username, $password);
$conn_db = new mysqli($server, $username, $password, $db);
?>
