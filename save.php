<?php
    include 'config.php';
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $idnumber=$_POST['idnumber'];
    $dob=$_POST['dob'];
    $datejoined=$_POST['datejoined'];
    $m_title_id=1;
    $added_by=$_POST['addedby'];
  
    $sql = "INSERT INTO tbl_members( first_name, last_name, email_address, password, id_number, date_joined, phone_number, added_by, member_title_id, dob) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($fname, $lname, $email, $idnumber, $idnumber, $datejoined, $mobile, $added_by, $m_title_id, $dob );
    $stmt = sqlsrv_query( $conn, $sql, $params);

    if ($stmt==true) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    sqlsrv_close($conn);
?>
 
