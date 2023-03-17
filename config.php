<?php
$host =  "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new PDO('mysql:host='.$host.';dbname='.$db.'',$user,$pass);
//var_dump($conn);
