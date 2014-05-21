<?php
$mysql_hostname = "hostname";
$mysql_user = "root";
$mysql_password = "password";
$mysql_database = "mention_list";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");



?>