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
  <?php
include "config.php";
include "control.inc";
require('fpdf/fpdf.php');

                    $sql = "SELECT * FROM tbl_transactions tt JOIN tbl_transaction_type tm on tt.transacted_by=tm.transact_id JOIN tbl_members ms ON ms.member_id= tt.transacted_by WHERE tm.transact_id = 2 AND tt.transacted_by='".$_SESSION['uid']."'";
                    $params = array();
                  $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                  $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                  $row_count = sqlsrv_num_rows( $result );

                     $qty= 0;
                    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                      $qty += $row['transaction_amount'];
					$fname = $row['first_name'];
					$lname = $row['last_name'];

                    }
    
     $sql = "SELECT * FROM tbl_transactions tt JOIN tbl_transaction_type tm on tt.transacted_by=tm.transact_id WHERE tm.transact_id = 2 AND tt.transacted_by='".$_SESSION['uid']."'";
            
                $params = array();
                $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
                $result = sqlsrv_query($conn, $sql, $params, $options) or die(sqlsrv_error());
                $row_count = sqlsrv_num_rows( $result );
               

                ?>
<p id="isPasted" style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><img width="84" src="images/log.jpg" class="fr-fic fr-dii"></p>

<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style="font-size:48px;line-height:107%;">HAPOEL ASSOCIATES</span></p>

<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style="font-size:29px;line-height:107%;">This is the Deposit Report For</span><span style="font-size:29px;line-height:107%; color: orange;"> <?php echo $fname;?> &nbsp; <?php echo $lname;?>&nbsp;</span></p>

<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style="font-size:29px;line-height:107%;">Generated On: <?php echo date("d-m-Y")?></span></p>

<p style="text-align: center;">
	<br>
</p>

                <table border="2" style= " color: black; margin: 0 auto;" class="col-md-8 grid-margin test" >
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
  //       $pdf = new FPDF();
		// $pdf->AddPage();
                   if ($row_count > 0) {
                       
                        
                        while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                            echo "<tr><td></td><td>" . $row["transaction_code"]. "</td><td>" . $row["transaction_amount"]. " </td><td> " . $row["transact_type"]. "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "No Records Found";
                    }

                    
              ?>
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
