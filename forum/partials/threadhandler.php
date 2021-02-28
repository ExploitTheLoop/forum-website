<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    if(!isset($_SESSION['Email']) || $_SESSION['Email']!= true){
    header("Location: /phpmyproject/forum/index.php?login=false");
    exit;
 }
}
?>

<?php
//collect username from session and put into table and then show threads created by
// the username "/settings/my threads/" delete threads 

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'dbconnect.php';
    $title = $_POST['title'];
    $des = $_POST['des'];
    
    if($title == "" && $des == ""){

        echo "please type some input";
        
  
      } else{

        if(isset($_SESSION['Email'])){
          $username = $_SESSION['Email'];
        } else {
          $username = "Guest";
        }
  
        $sql ="INSERT INTO `categories` (`category_id`, `category_name`, `category_des`, `created`, `username`) VALUES (NULL, '$title', '$des', 'current_timestamp()', '$username');";
        $result = mysqli_query($conn,$sql);
          if($result){
           echo "inserted data succesfully";
           header("location: /phpmyproject/forum/index.php?threadcreate=true");
          if(!$result){
            $show = var_dump($result);
            echo $show;
          }
  
       
    }
  }
}
?>