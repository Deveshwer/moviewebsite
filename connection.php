<?php
$servername = "127.0.0.1";
$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    
    die("failed to connect!");
}  
