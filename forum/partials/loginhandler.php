<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  require 'dbconnect.php';
  $Email =$_POST['Email'];
  $Password =$_POST['Password'];
  //$Rpassword = $_POST['Rpassword'];
 
  
    $sql ="SELECT * FROM `info` where email='$Email'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($Email == "" && $Password == ""){
      echo "check entries";
      header("location: /phpmyproject/forum/index.php?login=false");
    } else{
      if($num == 1){
        while($row = mysqli_fetch_assoc($result)){
        if(password_verify($Password,$row['pass'])){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Email'] = $Email;
        header("location: /phpmyproject/forum/index.php?login=true");
        }else{
          echo "error";
          header("location: /phpmyproject/forum/index.php?login=false");

        }
      }
    } 
     else {
      echo "error";
      header("location: /phpmyproject/forum/index.php?login=false");
    }
  }

}

?>