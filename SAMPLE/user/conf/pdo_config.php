<?php
$DB_host = "host.com";
$DB_user = "sql12780355";
$DB_pass = "";
$DB_name = "sql12780355";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
