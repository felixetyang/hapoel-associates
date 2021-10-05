  <?php
     session_start();
      include ("config.php");      
         

if (isset($_POST['login'])) {
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_members WHERE email_address='".$email."' AND password='".$password."'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
$row_count = sqlsrv_num_rows( $result );
   
if ($row_count === 1){
   $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
    $_SESSION['uid'] = $row['member_id'];
    $_SESSION['username'] = $row['first_name'];
    $_SESSION["login"] = "OK";
    $pass_status =  $row['pass_status'];
   if ($pass_status === 'unupdated') {
      header("Location: changepass.php");
   }else{
    header("Location: index.php");
 }
}else{
   echo '<script>alert("Your Email Address or Password is Incorrect. Please Check and Try Again!")</script>';
   header("Location: index1.php");
}

}  ?>