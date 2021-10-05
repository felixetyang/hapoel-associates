<?php
    include 'config.php';
    $transactedby=$_POST['transactedby'];
    $transactiondate=$_POST['transactiondate'];
    $transactioncode=$_POST['transactioncode'];
    $transactionamount=$_POST['transactionamount'];
    $dateentered=$_POST['dateentered'];
    $added_by=$_POST['addedby'];
    $transactedtype=$_POST['transactedtype'];
  
    $sql = "INSERT INTO tbl_transactions( transacted_by, transaction_date, transaction_code, date_entered, transaction_amount, entered_by, transaction_type) 
    VALUES (?, ?, ?, ?, ?, ?, ?)";
    $params = array($transactedby, $transactiondate, $transactioncode, $dateentered, $transactionamount, $added_by, $transactedtype);
    $stmt = sqlsrv_query( $conn, $sql, $params);

    if ($stmt==true) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    sqlsrv_close($conn);
?>
 
