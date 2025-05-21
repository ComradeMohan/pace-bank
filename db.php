<?php
$host = "sql12.freesqldatabase.com";     // remote host
$user = "sql12780355";                   // your DB user
$pass = "Pgly8MQ1dN";                         // your DB password
$db   = "sql12780355";                   // your DB name
$port = 3306;                           // port number (optional, default is 3306)

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Database connection failed."]));
}

date_default_timezone_set('Asia/Kolkata'); // Set timezone to IST (Indian Standard Time)
$error = "";
?>
