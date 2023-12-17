<?php
$db_connect = mysqli_connect("localhost", "root", "", "repair_requests") or die("Error: " . mysqli_error($db_connect));

// set utf8
mysqli_set_charset($db_connect, "utf8");

// set time zone
date_default_timezone_set('Asia/Bangkok');
?>
