<?php
//session_start();
if(!isset($_SESSION['Email']) || $_SESSION['Email']!= true){
    
  $loggedin = false;  

} else {

   $loggedin = true;
}


echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/phpmyproject/forum/index.php">BENKKSTUDIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpmyproject/forum/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/phpmyproject/forum/trending.php">Trending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
      </ul>
      <form class="d-flex" method="get" action="search.php">
        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success mx-2" type="submit">Search</button>
      </form>';
      
      if(!$loggedin){
      echo '<button class="btn btn-outline-primary mx-2"  data-bs-toggle="modal" data-bs-target="#loginmodal">login</button>
      <button class="btn btn-outline-primary mx-2"  data-bs-toggle="modal" data-bs-target="#signupmodal">signup</button>';
       }

       if($loggedin){
          
        echo'
        
        <ul class="navbar-nav me-3 mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Settings
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Account</a></li>
          <li><a class="dropdown-item" href="/phpmyproject/forum/mythread.php?key=?">My threads</a></li>
          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Threadmodal">Publish thread</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/phpmyproject/forum/partials/logouthandler.php">Logout</a></li>
          
        </ul>
      </li>
      </ul>
      ';
        
       }

    echo '</div>
  </div>
</nav>';

include 'partials/loginmodal.php';
include 'partials/signupmodal.php';
include 'partials/threadmodal.php';
?>

