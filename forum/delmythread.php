<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    if(!isset($_SESSION['Email']) || $_SESSION['Email']!= true){
    //dont do anything
    //solving sesssion issue by starting session at the top
 }
}
require 'partials/dbconnect.php';
$sno = $_GET['catid'];
$username = $_SESSION['Email'];
// Die if connection was not successful
$sql = "DELETE FROM `categories` WHERE `category_id` = $sno";
$result = mysqli_query($conn,$sql);
show($result);



if($result){
    
    echo "succes";
    header("location: /phpmyproject/forum/mythread.php?del=true");
} 

if($result){
    
    echo "succes";
    header("location: /phpmyproject/forum/mythread.php?del=false");
} 

function show($param){

    $show = var_dump($param);
    echo $show;

}



?>