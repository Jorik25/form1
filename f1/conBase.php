<?php
$serverName = "WIN-HOR0NF1CJQG\SQLEXPRESS";
$connectionInfo = array( "Database"=>"F1", "UID"=>"", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

//if( $conn ) {echo "Соединение удалось.<br />";}else{echo "Соединение не удалось, ошибка:";die( print_r( sqlsrv_errors(), true));}

?>