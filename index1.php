<?php
include "config.php";
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hapoel Associates</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/log.jpg" />
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  /*background-color: #5cb85c;*/
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
/*  background-color: #5cb85c;*/
  color: white;
}
</style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
                          <h6 class="font-weight-light">Sign in to continue.</h6>
    <?php
   
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
  echo '<button class="btn btn-danger">Your Email or Password Is Incorrect!</button>';
   // echo '<script>alert("Your Email Address or Password is Incorrect. Please Check and Try Again!")</script>';
   
}

}  ?>  
              <form class="pt-3" method="POST" action="">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="login">SIGN IN</button>
                 <!--  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">SIGN IN</a> -->
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a id="myBtn" href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>
            </div>
    

<!-- The Modal -->
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="max-width: 50%"> 
    <div class="modal-header">
      <span class="close">&times;</span>
      <!-- <h2>Modal Header</h2> -->
    </div>
    <br>
       <div style="color: forestgreen; margin-left: 10%;">Please fill in the fields below. The password will be sent to your email address.</div>
    <br>

    <div class="modal-body">

        <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Email Address</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="pwd0" placeholder="Email Address">
                   
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">ID Number</label>
                      <div class="col-sm-9"> 
                        <input type="password" name="pwd1" class="form-control" placeholder="ID Number">
                       
                      </div>
                    </div>
    </div>
    <div class="modal-footer">
      
     <button class="btn btn-success"> Submit</button>
    </div>
  </div>

</div>
          </div>
        </div>
      </div>

      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script type="text/javascript">
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  </script>
  <!-- endinject -->
</body>

</html>
