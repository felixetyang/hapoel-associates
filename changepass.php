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
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
          
              
               <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Change your password by filling in the fields below.</h4>
                  <br>
                  <p class="card-description">
                   <?php
    include 'config.php';
     ob_start();
 
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
   
if ($currentpass==$password and $newpass==$renewpass) {

    $sql = "UPDATE tbl_members
SET password = '".$newpass."', pass_status = 'updated'
WHERE member_id = '".$_SESSION['uid']."'";
    
    $params = array();
    $stmt = sqlsrv_query( $conn, $sql, $params);

    if ($stmt==true) {
      echo '<text style="color: green">The password succesfully updated. Click <a href="index.php" style="color: red">here</a> to continue</text>';
         
    } 
    else {
        echo '<text style="color: red">One of your details is incorrect<text>';
     
    }
} else{
        echo '<text style="color: red">!the password dont match!<text>';

}
  
    sqlsrv_close($conn);
}
?>
 
                  </p>
             <form class="forms-sample" method="POST" action="">   
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Current Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="currentpass" id="currentpass" placeholder="Current Password">
                      </div>
                    </div>
                    
                      <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-4 col-form-label">New Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="newpass" id="newpass" placeholder="New Password"> <span id="StrengthDisp" class="badge displayBadge" style="color: white">Weak</span>
                      </div>
                       
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-4 col-form-label">Confirm Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="renewpass" id="renewpass" placeholder="Confirm Password">
                      <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                      </div>
                      
                    </div>

                  <footer class="modal-footer" align=”right”>
                    <a href="index1.php" class="btn btn-light">Cancel</a>                    
                   <button type="submit" class="btn btn-success" name="update_password">Submit</button>

                    </footer>
                  
                </div>
              </div>
            </div>
              </form>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  function updateBottomValue(selectedvalue) {
         document.getElementById("selectedValue").innerHTML=selectedvalue;
}
  function transactionTypeValue(selectedvalue) {
         document.getElementById("selectedValue").innerHTML=selectedvalue;
}
$(document).ready(function() {
    $('#butsave').on('click', function() {
        $("#butsave").attr("disabled", "disabled");
        var currentpass = $('#currentpass').val();
        var newpass = $('#newpass').val();
        var renewpass = $('#renewpass').val();
        
        if(currentpass!="" && newpass!="" && renewpass!="" ){
            $.ajax({
                url: "update_password.php",
                type: "POST",
                data: {
                    currentpass: currentpass,
                    newpass: newpass,
                    renewpass: renewpass
                   


                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").removeAttr("disabled");
                        $('#fupForm').find('input:text').val('');
                        $("#success").show();
                        $('#success').html('Data added successfully !');                        
                    }
                    else if(dataResult.statusCode==201){
                       alert("Error occured, Please Try Again!");
                    }
                    
                }
            });
        }
        else{
            alert('Please fill all the field !');
        }
    });
});
</script>
<script type="text/javascript">
    
    // timeout before a callback is called

    let timeout;

    // traversing the DOM and getting the input and span using their IDs

    let password = document.getElementById('newpass')
    let strengthBadge = document.getElementById('StrengthDisp')

    // The strong and weak password Regex pattern checker

    let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
    let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')
    
    function StrengthChecker(PasswordParameter){
        // We then change the badge's color and text based on the password strength

        if(strongPassword.test(PasswordParameter)) {
            strengthBadge.style.backgroundColor = "green"
            strengthBadge.textContent = 'Strong'
        } else if(mediumPassword.test(PasswordParameter)){
            strengthBadge.style.backgroundColor = 'blue'
            strengthBadge.textContent = 'Medium'
        } else{
            strengthBadge.style.backgroundColor = 'red'
            strengthBadge.textContent = 'Weak'
        }
    }

    // Adding an input event listener when a user types to the  password input 

    password.addEventListener("input", () => {

        //The badge is hidden by default, so we show it

        strengthBadge.style.display= 'block'
        clearTimeout(timeout);

        //We then call the StrengChecker function as a callback then pass the typed password to it

        timeout = setTimeout(() => StrengthChecker(password.value), 500);

        //Incase a user clears the text, the badge is hidden again

        if(password.value.length !== 0){
            strengthBadge.style.display != 'block'
        } else{
            strengthBadge.style.display = 'none'
        }
    });
</script>
<script>
    $(document).ready(function() {
      $("#renewpass").on('keyup', function() {
        var newpass = $("#newpass").val();
        var renewpass = $("#renewpass").val();
        if (newpass != renewpass)
          $("#CheckPasswordMatch").html("Password does not match !").css("color", "red");
        else
          $("#CheckPasswordMatch").html("Password match !").css("color", "green");
      });
    });
  </script>
  <!-- endinject -->
</body>

</html>
