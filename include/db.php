<?php
$dbhost       = 'localhost';
$dbusername   = 'root';
$dbpassword   = '';
$dbname       = 'outing';
$db           = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());
