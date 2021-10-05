<?php
include("config.php");
include("control.inc");

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
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/log.jpg" />
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  
 
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/log.jpg" class="mr-2" alt="logo"/>Hapoel Associates</a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/log.jpg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
      <div style="color: blue">  <?php echo date('l jS \of F Y');?>   &nbsp;&nbsp;&nbsp;  <?php 
         $sql = "SELECT * FROM tbl_transactions WHERE transacted_by='".$_SESSION['uid']."'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
$row_count = sqlsrv_num_rows( $result );
   
   $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
    $transaction_date = $row['transaction_date'];
  $payment_status = "paid";
                  $current_date = date('Y-m-d');
                  $deadline = date('Y-m-15');
                  $payment_stat = "unpaid";
                  if($transaction_date>$deadline && $payment_stat = $payment_status){
                    echo '<txt style="color: red">You have a pending debt<txt>';
                  }else{

                  }
                  
                ?></div>

    

        <ul class="navbar-nav navbar-nav-right">

        
           <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>

            
          </li>
          <?php
$sql = "SELECT * FROM tbl_members WHERE member_id='".$_SESSION['uid']."'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
$row_count = sqlsrv_num_rows( $result );
   
   $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
    $first_name = $row['first_name'];
   $last_name = $row['last_name'];
   $email = $row['email_address'];
   $phone = $row['phone_number'];
   $id_number = $row['id_number'];
    
?>

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face29.jpg" style="max-height: 30px; max-width: 30px;" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" data-toggle="modal" data-target="#profileModal">
                <i class="ti-user text-primary"></i>
                Profile
              </a>
              <a class="dropdown-item" data-toggle="modal" data-target="#myModal">
                <i class="ti-key text-primary" ></i>
                Change Password
              </a>
             
              <!-- <a class="dropdown-item" id="myBtn" >
                <i class="ti-power-off text-primary"></i>
                Logout
              </a> -->
              <a class="dropdown-item" href="logout.php" onclick="return confirm('Are you sure you want to logout?');"><i class="ti-power-off text-primary"></i>Logout</a>
 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

<div class="modal fade" id="profileModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
              <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                      <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">First Name</label>
                      <div class="col-sm-9">
                        <input disabled="text" class="form-control" name="pwd0" placeholder="<?php echo $first_name ?>">
                   
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Last Name</label>
                      <div class="col-sm-9"> 
                        <h1><input disabled="text" name="pwd1" class="form-control" placeholder="<?php echo $last_name ?>"></h1>
                       
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Email Address</label>
                      <div class="col-sm-9">
                        <input disabled="text" name="pwd2" class="form-control"  placeholder="<?php echo $email ?>">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Phone Number</label>
                      <div class="col-sm-9">
                        <input disabled="text" name="pwd2" class="form-control"  placeholder="<?php echo $phone ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Id Number</label>
                      <div class="col-sm-9">
                        <input disabled="text" name="pwd2" class="form-control"  placeholder="<?php echo $id_number ?>">
                      </div>
                    </div>
                    <p style="color:red">If you have any Issues With the above Information please click <a href="#"> Here</a> to contact admin</p>
                       
                      </form>
                  
               
                  
                          
                </div>
              </div>
            </div>
          <!-- <p>Some text in the modal.</p> -->
        </div>
        
      </div>
        
    </div>
  </div>

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
              <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="..." onsubmit="return checkForm(this);">
                      <!-- <p>Username: <input type="text" name="username"></p> -->
                      <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Old Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="pwd0" placeholder="Old Password">
                   
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-9"> 
                        <input type="password" name="pwd1" class="form-control" placeholder="New Password">
                       
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="pwd2" class="form-control"  placeholder="Re-enter New Password">
                      </div>
                    </div>
                     <!--  <p>Old Password: <input type="password" name="pwd0"></p>
                      <p>New Password: <input type="password" name="pwd1"></p>
                      <p>Confirm Password: <input type="password" name="pwd2"></p> -->
                       <div class="modal-footer">
                        <button align="left" type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      </div>
                    
                      </form>
                  
               
                  
                          
                </div>
              </div>
            </div>
          <!-- <p>Some text in the modal.</p> -->
        </div>
        
      </div>
        
    </div>
  </div>

</div>
<script type="text/javascript">

    var IDLE_TIMEOUT = 15 * 60;  // 10 minutes of inactivity
    var _idleSecondsCounter = 0;
    document.onclick = function() {
        _idleSecondsCounter = 0;
    };
    document.onmousemove = function() {
        _idleSecondsCounter = 0;
    };
    document.onkeypress = function() {
        _idleSecondsCounter = 0;
    };
    window.setInterval(CheckIdleTime, 1000);
    function CheckIdleTime() {
        _idleSecondsCounter++;
        var oPanel = document.getElementById("SecondsUntilExpire");
        if (oPanel)
            oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
        if (_idleSecondsCounter >= IDLE_TIMEOUT) {
            // destroy the session in logout.php 
            document.location.href = "logout.php";
        }
    }


  function checkPassword(str)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    // if(form.username.value == "") {
    //   alert("Error: Username cannot be blank!");
    //   form.username.focus();
    //   return false;
    // }
    // re = /^\w+$/;
    // if(!re.test(form.username.value)) {
    //   alert("Error: Username must contain only letters, numbers and underscores!");
    //   form.username.focus();
    //   return false;
    // }
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(!checkPassword(form.pwd1.value)) {
        alert("The password you have entered is not valid!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Your Password Dont Match!");
      form.pwd1.focus();
      return false;
    }
    return true;
  }

</script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>


  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>


  <!-- End custom js for this page-->
</body>

</html>

