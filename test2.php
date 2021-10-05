<?php
    include 'config.php';
    $old_pass=$_POST['old_pass'];
    $newpass=$_POST['newpass'];
    $repass=$_POST['repass'];
    
     $sql = "SELECT * FROM tbl_members WHERE member_id='".$_SESSION['uid']."'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
$row_count = sqlsrv_num_rows( $result );
 $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
   $member_id = $row['member_id'];
    $password= $row['password'];
    echo $password;
// if ($old_pass==$password and $newpass==$repass) {

//     echo 'the pass match';
    $sql = "UPDATE change_password
SET (password)
VALUES (?)
WHERE member_id = '".$_SESSION['uid']."'";
    // $sql = "INSERT INTO change_password( username, password, confirm_password) 
    //  VALUES (?, ?, ?)";
    $params = array( $newpass);
    $stmt = sqlsrv_query( $conn, $sql, $params);

    if ($stmt==true) {
        // echo "the password is updated";
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        // echo "an error occured";
        echo json_encode(array("statusCode"=>201));
    }
// } else{
//   // echo  'the password dont match';
//     echo json_encode(array("statusCode"=>201));
// }
sqlsrv_close($conn);
  
    
?>
 
