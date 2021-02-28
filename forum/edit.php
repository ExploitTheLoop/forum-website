<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    if(!isset($_SESSION['Email']) || $_SESSION['Email']!= true){
        header("location: /phpmyproject/forum/index.php");

 }
}
?>
<!doctype html>
<html lang="en"ed meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>BENKKSTUDIO</title>
  </head>
  <body>
  <head>
    <?php
 
    
    include "partials/header.php";
    require 'partials/dbconnect.php';
    ?>










    <div class="container my-4">
    <h2 class="text-center my-4">Edit Your Threads Here</h2>
    <!--card here-->
     <div class="row my-4">

      <!--use a for loop to itterate-->

     <?php
     $id=$_GET['catid'];
     $Email = $_SESSION['Email'];
     $sql ="SELECT * FROM `categories`";
     //$result = mysqli_query($conn,$sql);
     $result = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($result)){
       $cat = $row['category_name'];
       $des = $row['category_des'];
       $time = $row['created'];
       $no = $row['category_id'];
       $username = $row['username'];

       

       
      if($Email == $username){
          if($id == $no){

        echo'
        <div class="conatiner">
        <form method="post">
        <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="title" name="title"></textarea>
  <label for="floatingTextarea">'.$cat.'</label>
</div>
<div class="form-floating mb-3">
<textarea class="form-control" placeholder="leave a comment here" id="des" name="des" style="height: 100px"></textarea>
<label for="floatingTextarea2">'.$des.'</label>
</div>
<button class="btn btn-primary" type="submit">Update</button>
</form>
</div>';
          } else {
             // echo "no threads";
          }
         
      } 
    }

       
      
      if($Email != $username){
        echo"no threads";
  
    }

    ?>
    <?php
     $id=$_GET['catid'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $title = $_POST['title'];
        $des = $_POST['des'];
        $sql2 = "UPDATE `categories` SET `category_name` = '$title' WHERE `categories`.`category_id` = $id;";
        $sql3 = "UPDATE `categories` SET `category_des` = '$des' WHERE `categories`.`category_id` = $id;";
        $result2 = mysqli_query($conn,$sql2);
        $result3 = mysqli_query($conn,$sql3);
         if($result2 && $result3){
             echo 'updated';
         } else {
             echo 'could not update';
         }

    }

     ?>
      
   
     

    

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