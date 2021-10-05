<?php
include("config.php");
$query ="SELECT * FROM tbl_members";
$result =sqlsrv_query($query) or die(sqlsrv_error());
while ( $record = sqlsrv_fetch_array($result) )
{
	echo $record["email_address"] .", ". $record["password"] ."<br />";
}
?>