<?php
$serverName = "OMUSE\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"HAPOEL_ASSOCIATES", "UID"=>"sa", "PWD"=>"@Omuse2000");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


// if( $conn ) {
//      echo "Connection established.<br />";
// }else{
//      echo "Connection could not be established.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }
?>