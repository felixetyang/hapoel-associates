<?php
  session_start();

  if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
    header("Location: index1.php");
    exit;
}

// if( !isset($_SESSION['logout']) ){
//       $_SESSION['logout'] = strtotime('+15 minutes', time()); 
//     }

//     if( time() > $_SESSION['logout'])
//     {
//       session_destroy();
//         header("Location: index1.php"); 
//     }else{
//             $_SESSION['logout'] = strtotime('+15 minutes', time());
//         }
?>