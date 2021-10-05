<?php
include("config.php");
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
  <style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/log.jpg" class="mr-2" alt="logo"/>Hapoel Associates</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/log.jpg" alt="logo"/></a>
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
        <?php echo date('l jS \of F Y');?>
</script>
        

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


          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-user text-primary"></i>
                Profile
              </a>
              <a class="dropdown-item">
                <i class="ti-key text-primary"></i>
                Change Password
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item" active>
            <a class="nav-link" href="members.php">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Members</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Transactions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
               <!--   <p>Click on the buttons inside the tabbed menu:</p> -->

                  <div class="tab">
                    <button class="tablinks" onclick="openTransactions(event, 'all_transaction')">All Transactions</button>
                    <button class="tablinks" onclick="openTransactions(event, 'Deposits')">Deposits</button>
                    <button class="tablinks" onclick="openTransactions(event, 'Withdrawals')">Withdrawals</button>
                         <?php 
         $sql = "SELECT * FROM tbl_members tm join tbl_member_title tmt on tmt.title_id=tm.member_title_id WHERE tm.member_id='".$_SESSION['uid']."'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
$row_count = sqlsrv_num_rows( $result );
   
   $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
    $title_id = $row['title_id'];
  
                  if($title_id==2 ): ?>
      
                      <a class="tablinks btn btn-primary" onclick="openTransactions(event, 'add_records')"><?php echo 'Add Transaction Records';?></a>

                 <?php endif; ?>
                  
              
                    <button class="tablinks" onclick="openTransactions(event, 'Loans')">Loans</button>
                      <p>
                        
                    </p>
                  </div>

                  <div id="all_transaction" class="tabcontent">
                   <button class="btn btn-success">Download Report</button>
                   <br>
                  <p> <?php
                    $sql = "SELECT * FROM tbl_transactions tt JOIN tbl_transaction_type tm on tt.transacted_by=tm.transact_id WHERE tt.transacted_by='".$_SESSION['uid']."'";
                    $params = array();
                  $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                  $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                  $row_count = sqlsrv_num_rows( $result );

                     $qty= 0;
                    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                      $qty += $row['transaction_amount'];


                    }
    
     $sql = "SELECT * FROM tbl_transactions tt JOIN tbl_transaction_type tm on tt.transacted_by=tm.transact_id WHERE tt.transacted_by='".$_SESSION['uid']."'";
                $params = array();
                $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                $row_count = sqlsrv_num_rows( $result );
               

                ?></p>
                <table border="2" style= " color: black; margin: 0 auto;" class="col-md-12 grid-margin test" >
      <thead>
        <tr>
          <th>No</th>
          <th>Code</th>
          <th>Amount (Total = <?php echo $qty;?>)</th>
          <th>Type</th>
          
        </tr>
      </thead>

      <tbody>
        <?php
                   if ($row_count > 0) {
                       
                        
                        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                            echo "<tr><td></td><td>" . $row["transaction_code"]. "</td><td>" . $row["transaction_amount"]. " </td><td> " . $row["transact_type"]. "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No Records Found";
                    }

                    
              ?></p> 
                                 </div>

                  <div id="Deposits"  class="tabcontent" >
                   <button class="btn btn-success">Download Report</button>
                    <p> <?php
                    $sql = "SELECT * FROM tbl_transactions tt JOIN tbl_transaction_type tm on tt.transacted_by=tm.transact_id WHERE tt.transaction_type = 2 AND tt.transacted_by='".$_SESSION['uid']."'";
                    $params = array();
                  $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                  $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                  $row_count = sqlsrv_num_rows( $result );

                     $qty= 0;
                    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                      $qty += $row['transaction_amount'];


                    }
    
     $sql = "SELECT * FROM tbl_transactions tt JOIN tbl_transaction_type tm on tt.transacted_by=tm.transact_id WHERE tm.transact_id = 2 AND tt.transacted_by='".$_SESSION['uid']."'";
            
                $params = array();
                $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                $row_count = sqlsrv_num_rows( $result );
               

                ?>
                <table border="2" style= " color: black; margin: 0 auto;" class="col-md-12 grid-margin test" >
      <thead>
        <tr>
          <th>No</th>
          <th>Code</th>
          <th>Amount (Total = <?php echo $qty;?>)</th>
          <th>Type</th>
          
        </tr>
      </thead>

      <tbody>
        <?php
                   if ($row_count > 0) {
                       
                        
                        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                            echo "<tr><td></td><td>" . $row["transaction_code"]. "</td><td>" . $row["transaction_amount"]. " </td><td> " . $row["transact_type"]. "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No Records Found";
                    }

                    
              ?></p> 
                  </div>

                  <div  id="Withdrawals" class="tabcontent">
                  <button class="btn btn-success">Download Report</button>
                    <p>

                      <?php
    
     $sql = "SELECT * FROM tbl_transactions tt JOIN tbl_transaction_type tm on tt.transacted_by=tm.transact_id WHERE tm.transact_id = 1 AND tt.transacted_by='".$_SESSION['uid']."'";
            
                $params = array();
                $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                $row_count = sqlsrv_num_rows( $result );

                   if ($row_count > 0) {
                        echo "<table><tr><th>No</th><th> Transaction Code Transaction Amount</th><th>Transaction Date</th></tr>";
                        // output data of each row
                        
                        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                            echo "<tr><td>" . $row["transaction_code"]. "</td><td>" . $row["transaction_amount"]. " " . $row["transact_type"]. "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No Records Found";
                    }

                    
              ?></p>
                  </div>
                  <div id="Loans" class="tabcontent">
                  <button class="btn btn-success">Download Report</button>
                    <p style="color: forestgreen;">The Product Will Be Available Soon!</p>
                  </div>
                   <div id="add_records" class="tabcontent">
                 
                    <p><div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
        
             
      

            <br>         
            <br>         
     
    <span id="selectedValue"></span>
                  <form class="forms-sample" id="fupForm" name="form1" method="post">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Transacted By </label>
                      <div class="col-sm-4">
                        
                              <?php 
            $sql = "SELECT * FROM tbl_members ORDER by first_name ASC";  
              $params = array();
                $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                $row_count = sqlsrv_num_rows( $result );
          
echo "<select name='transactedby' class='form-control' required id='transactedby'><option value=''>--- Select ---</option>";
while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
  $i = $row['member_id'];
  $j = $row['first_name'];
  $k = $row['last_name'];

  echo "<option value='$i'> <tr><td>" . $row["first_name"]. " " . $row["last_name"]. "</td><tr></option>";  
}
echo "</select>";

?>
                      </div>
                      <label for="exampleInputConfirmPassword2" class="col-sm-2 col-form-label">Transaction Date</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" name="transactiondate" id="transactiondate" placeholder="Transaction Date">
                        <input type="hidden" class="form-control" name="dateentered" id="dateentered" value="<?php echo date("Y-m-d")?>" >
                        <input type="hidden" class="form-control" name="addedby" id="addedby" value="<?php echo $_SESSION['uid']?>" >

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Transaction Code</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="transactioncode" id="transactioncode" placeholder="Transaction Code">
                      </div>
                    
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Transaction Amount</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="transactionamount" id="transactionamount" placeholder="Amount">
                      </div>
                    </div>
                        <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Transaction Type </label>
                      <div class="col-sm-4">
                        
                              <?php 
            $sql = "SELECT * FROM tbl_transaction_type";  
              $params = array();
                $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                $row_count = sqlsrv_num_rows( $result );
          
echo "<select name='transactedtype' class='form-control' required id='transactedtype' ><option value=''>--- Select ---</option>";
while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
  $i = $row['transact_id'];
  

  echo "<option value='$i'> <tr><td>" . $row["transact_type"]. "</td><tr></option>";  
}
echo "</select>";

?>
                      </div>
                      
                    </div>                 
                    

                    <div align="right">
                    <button class="btn btn-light">Cancel</button>
                    <button type="submit" name="save"  id="butsave" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div></p>
                  </div>

            </div>
          </div>
      
         
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo date ("Y")?>.   Hapoel Associates. All rights reserved.
            </span>
          <!--   <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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
  <script src="js/transactions.js"></script>
<script type="text/javascript">
  var addNumeration = function(cl){
  var table = document.querySelector('table.' + cl)
  var trs = table.querySelectorAll('tr')
  var counter = 1
  
  Array.prototype.forEach.call(trs, function(x,i){
    var firstChild = x.children[0]
    if (firstChild.tagName === 'TD') {
      var cell = document.createElement('td')
      cell.textContent = counter ++
      x.insertBefore(cell,firstChild)
    } else {
      firstChild.setAttribute('colspan',2)
    }
  })
}

addNumeration("test")
</script>
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
        var transactedby = $('#transactedby').val();
        var transactiondate = $('#transactiondate').val();
        var transactioncode = $('#transactioncode').val();
        var transactionamount = $('#transactionamount').val();
        var dateentered = $('#dateentered').val();
        var addedby = $('#addedby').val();
        var transactedtype = $('#transactedtype').val();
        if(transactedby!="" && transactiondate!="" && transactioncode!="" && transactionamount!="" && dateentered!=""  && addedby!="" && transactedtype!=""){
            $.ajax({
                url: "savetransactions.php",
                type: "POST",
                data: {
                    transactedby: transactedby,
                    transactiondate: transactiondate,
                    transactioncode: transactioncode,
                    transactionamount: transactionamount,
                    dateentered: dateentered,
                    addedby: addedby,
                    transactedtype: transactedtype


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
  <!-- End custom js for this page-->
</body>

</html>

