<?php

if (isset($_POST['signup-submit'])) {

require 'dbh.inc.php';
$username = $_POST['uid'];
$email= $_POST['mail'];
$password = $_POST['pwd'];
$PasswordRepeat = $_POST['pwd-repeat'];

 if (empty($username) || empty($email) || empty($password) || empty($PasswordRepeat) ) {
   header("location: ../signup.php?error=emptyfield&uid=".$username."&mail".$email);
   exit();
 }
 elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
   header("location: ../signup.php?error=InvalidMailanduid");
   exit();
 }
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("location: ../signup.php?error=InvalidMail&uid=".$username);
  exit();
}
elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
  header("location: ../signup.php?error=Invaliduid&mail=".$email);
  exit();
}
elseif ($password !==$PasswordRepeat) {
  header("location: ../signup.php?error=passwordnotmatch&mail=".$email."&uid=".$username);
  exit();
}
else {
  $sql ="SELECT uidUsers FROM Users WHERE uidUsers=? ";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt,$sql)) {
   header("location: ../signup.php?error=useralreadyinuse");
   exit();
 }
 else {
   mysqli_stmt_bind_param($stmt,"s", $username);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_store_result($stmt);
   $resultCheck= mysqli_stmt_num_rows($stmt);
   if ($resultCheck>0) {
     header("location: ../signup.php?error=useralreadyinuse&mail=".$email);
     exit();
   }
   else {
     $sql = "INSERT INTO Users (uidUsers,emailUsers,pwdUsers) VALUES  (?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header("location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
$hashedpwd = password_hash($password,PASSWORD_DEFAULT);

      mysqli_stmt_bind_param($stmt,"sss", $username,$email,$hashedpwd);
      mysqli_stmt_execute($stmt);
      header("location: ../signup.php?SIGNUP=SUCCESS!");
      exit();

    }
   }
 }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else{
  header("location: ../signup.php");
  exit();
}
