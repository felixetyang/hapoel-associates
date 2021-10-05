<?php
    include 'config.php';
     ob_start();
   session_start();
   if (isset($_POST['update_password'])) {

    $currentpass=$_POST['currentpass'];
    $newpass=$_POST['newpass'];
    
    $renewpass=$_POST['renewpass'];
    
    $sql = "SELECT * FROM tbl_members WHERE member_id='".$_SESSION['uid']."'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
$row_count = sqlsrv_num_rows( $result );
 $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
   $member_id = $row['member_id'];
    $password= $row['password'];
    echo $password;
if ($currentpass==$password and $newpass==$renewpass) {

    echo 'the pass match';
    $sql = "UPDATE tbl_members
SET password = '".$newpass."', pass_status = 'updated'
WHERE member_id = '".$_SESSION['uid']."'";
    
    $params = array();
    $stmt = sqlsrv_query( $conn, $sql, $params);

    if ($stmt==true) {
         header("Location: index.php");
    } 
    else {
        echo "an error occured";
        // echo json_encode(array("statusCode"=>201));
    }
} else{
  echo  'the password dont match';
}
    
  
    // $sql = "INSERT INTO tbl_transactions( transacted_by, transaction_date, transaction_code, date_entered, transaction_amount, entered_by, transaction_type) 
    // VALUES (?, ?, ?, ?, ?, ?, ?)";
    // $params = array($transactedby, $transactiondate, $transactioncode, $dateentered, $transactionamount, $added_by, $transactedtype);
    // $stmt = sqlsrv_query( $conn, $sql, $params);

    // if ($stmt==true) {
    //     echo json_encode(array("statusCode"=>200));
    // } 
    // else {
    //     echo json_encode(array("statusCode"=>201));
    // }
    sqlsrv_close($conn);
}
?>
 