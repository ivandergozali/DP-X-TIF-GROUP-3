<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tod_story';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    exit('Connection failed: ' . mysqli_connect_error() . PHP_EOL);
}
