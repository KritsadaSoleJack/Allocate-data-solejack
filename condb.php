<?php $condb=mysqli_connect("localhost", "root", "", "dblist") or die("Error : ".mysqli_error($condb));
//set utf8
mysqli_query($condb, "Set names'utf8' ");

//echo date('Y-m-d H:i:s');
//set time zone
date_default_timezone_set('Asia/Bangkok');

?>