<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    if(!isset($_SESSION['Email']) || $_SESSION['Email']!= true){
    //dont do anything
    //solving sesssion issue by starting session at the top
 }
}
?>

<?php
//inserting comments
$succes = false;
$showerror = false;
$id = $_GET['catid'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
  require 'partials/dbconnect.php';
  $comments =$_POST['comments'];
  $id = $_GET['catid'];
 
    
    if($comments == ""){
      $showerror = true;
      header("location: /phpmyproject/forum/threadlist.php?catid=$id");

    } else{

      if(isset($_SESSION['Email'])){
        $username = $_SESSION['Email'];
      } else {
        $username = "Guest";
      }

      $sql ="INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_des`, `thread_user_id`, `thread_cat_id`, `timestamp`) VALUES ('', '$username', '$comments', '', '$id', current_timestamp());";
      $result = mysqli_query($conn,$sql);
      header("location: /phpmyproject/forum/threadlist.php?catid=$id");

      $login = true;
     
  }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>BENKKSTUDIO</title>
  </head>
  <body>
    <?php
    
    include "partials/header.php";
    require 'partials/dbconnect.php';
    
    ?>










    
    <!--card here-->
     

     <?php
     //detching threads

     $id = $_GET['catid'];
     $sql = "SELECT * FROM `categories` WHERE category_id=$id ";
     $result = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($result)){
      $cat = $row['category_name'];
      $des = $row['category_des'];
      $time = $row['created'];
      $no = $row['category_id'];
      $user = $row['username'];    

     }

     ?>
      <!--alerts-->
       <div class="container my-5">
        <div class="alert alert-primary" role="alert">
        <h1 class="display-4"><?php echo $cat; ?></h1>
        <p class="lead"><?php echo $des; ?></p>
        <hr class="my-4">
        <p>Created by :<?php
        echo $user ?> </p>
      </div>
    </div>

    
       <div class="container my-5">

       
       <!--itterate through while loop-->

       <?php
     //fetching showing comments

     //session_start();
    

     $id = $_GET['catid'];
     $sql = "SELECT * FROM `threads` WHERE 	thread_cat_id=$id";
     $result = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($result)){
      $title = $row['thread_title'];
      $catid = $row['thread_cat_id'];
      $userid = $row['thread_user_id'];
      $des = $row['thread_des'];
      $time = $row['timestamp'];
      $no = $row['thread_id'];

      if(!$des == ""){

          echo '<div class="container my-3">
          <div class="media">
        <img src="/phpmyproject/forum/img/man-300x300.png" width="34px" class="align-self-center mr-4" alt="...">
        <div class="media-body">
          <h5 class="mt-0">'.$title.'</h5>
          <p>'.$des.'</p>
        </div>
      </div>
      </div>';

      } 

     }

     ?>


      <div class="container my-3">
        <form method="post">
         <div class="form-group">
         <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" name ="comments" id="comments"></textarea>
          <label for="floatingTextarea">Comments</label>
        </div>
         <div class="container my-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
        </div>



    </div>
    

      
    
       

     

    

     
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>