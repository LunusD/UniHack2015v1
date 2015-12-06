<?php
$dbhost  = 'localhost';
$dbname  = 'guh15';
$dbuser  = 'webSQL';
$dbpass  = 'herpderp123';

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
)
?>
