<?php

$servername = 'localhost';
$username = 'root';
$passwprd = '12345678';
$dbname = 'datab';

$connect = mysqli_connect($servername,$username,$passwprd,$dbname) or die("เชื่อมต่อไม่ได้");

mysqli_set_charset($conn,"utf8");

 ?>