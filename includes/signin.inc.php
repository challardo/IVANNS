<?php
if (isset($_POST['login-submit'])) {
require 'dbh.inc.php';
$mailuid = $_POST['mailuid'];
$password = $_POST['pwd'];

if(empty($mailuid ) || empty($password  )){
header("location: ../signin.php?error=emptyfields");
exit();
}
else {
   $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt,$sql)) {
     header("location: ../signin.php?error=sqlerror");
     exit();
   }
   else {
     mysqli_stmt_bind_param($stmt, "ss",$mailuid,$mailuid);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     if ($row= mysqli_fetch_assoc($result)) {
       $pwdCheck= password_verify($password,$row['pwdUsers']);
       if ($pwdCheck==false) {
         header("location: ../signin.php?error=wrongpwd");
         exit();
       }
       elseif ($pwdCheck==true) {
         session_start();
         $_SESSION['userId']  = $row['idUsers'];
         $_SESSION['userId']  = $row['uidUsers'];
         header("location: ../index.php?LOGIN=SUCCESS!");
         exit();
       }
       else {
         header("location: ../signin.php?error=wrongpwd");
         exit();
       }
     }
     else {
       header("location: ../signin.php?error=NoUser");
       exit();
     }
   }
     }
  }
else {
  header("location: ../signin.php");
  exit();
}

 ?>
