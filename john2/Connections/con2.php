<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con2 = "localhost";
$database_con2 = "johnson";
$username_con2 = "root";
$password_con2 = "12345";
$con2 = mysql_pconnect($hostname_con2, $username_con2, $password_con2) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");
?>