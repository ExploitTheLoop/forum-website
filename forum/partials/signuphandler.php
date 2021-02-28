<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'dbconnect.php';
    //$username =$_POST["Email"];
    $Password =$_POST["Password"];
    $Email = $_POST["Email"];
    $CPassword = $_POST["CPassword"];
    $exits = false;
    //check account exits 
    $chksql = "SELECT * FROM `info` WHERE email = '$Email'";
    $exsql = mysqli_query($conn,$chksql);
    $chkrow = mysqli_num_rows($exsql);
    if($chkrow > 0 && $CPassword != $Password){
  
      $exits = true;
      
      echo "email exists already";
      header("location: /phpmyproject/forum/index.php?signup=false");
      
    } else {
      //do nothing
       if(!$exits){
       $hash = password_hash($Password, PASSWORD_DEFAULT);
       $sql = "INSERT INTO `info` (`sno`, `email`, `pass`, `uuid`, `time`) VALUES (NULL, '$Email', '$hash', '', '');";
       $reult = mysqli_query($conn,$sql);
       if($reult){
        $showAlert = true;
        header("location: /phpmyproject/forum/index.php?signup=true");
        }
      } 
      else {
       
       echo "error";
       header("location: /phpmyproject/forum/index.php?signup=false");
      }
   }
  }



?>