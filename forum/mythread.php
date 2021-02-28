<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    if(!isset($_SESSION['Email']) || $_SESSION['Email']!= true){
    //dont do anything
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
    <h2 class="text-center my-4">My-Threads</h2>
    <!--card here-->
     <div class="row my-4">

      <!--use a for loop to itterate-->

     <?php
     $Email = $_SESSION['Email'];
     $sql ="SELECT * FROM `categories`";
     $result = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_assoc($result)){
       $cat = $row['category_name'];
       $des = $row['category_des'];
       $time = $row['created'];
       $no = $row['category_id'];
       $username = $row['username'];

       

       
      if($Email == $username){
        echo'<div class="col-md-4 my-2">
       <div class="card" style="width: 18rem;">
       <img src="https://source.unsplash.com/500x400/?'.$cat.',coding" class="card-img-top" alt="...">
       <div class="card-body">
      <h5 class="card-title"><a herf="/phpmyproject/forum/threadlist.php?catid='.$no.'">'.$cat.'</a></h5>
      <p class="card-text">'.substr($des,0,50).'...</p>
      <a href="/phpmyproject/forum/threadlist.php?catid='.$no.'" class="btn btn-primary">View Threads</a>
      <a href="/phpmyproject/forum/delmythread.php?catid='.$no.'" class="btn btn-primary my-2">Delete</a>
      <a href="/phpmyproject/forum/edit.php?catid='.$no.'" class="btn btn-primary my-2">Edit</a>
      </div>
      </div>
      </div>';
      } 
    }

       
      
      if($Email != $username){
        echo"no threads";
  
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