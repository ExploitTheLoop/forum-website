<?php
$id = $_GET['catid'];
if(!isset($_SESSION['Email'])){
        session_start();
        if (!$_SESSION['Email']){
            $username = "Guest";
            header("location: /phpmyproject/forum/threadlist.php?catid=$id");
        } else {
          $username = $_SESSION['Email'];
          header("location: /phpmyproject/forum/threadlist.php?catid=$id");
        }
      
       
      } else{
        
        session_start();
        $username = $_SESSION['Email'];
        header("location: /phpmyproject/forum/threadlist.php?catid=$id");
        
 
     }
?>