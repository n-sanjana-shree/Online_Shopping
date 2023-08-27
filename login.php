<?php
  
   session_start();
    
   
   
// Grab User submitted information
    $username = (isset($_POST['username']) ? strip_tags($_POST['username']) : ''); 
    $password = (isset($_POST['password']) ? strip_tags($_POST['password']) : ''); 

// Connect to the database
    $con = mysqli_connect("localhost","root","","sampledb");
    $result=mysqli_query($con,"select * from user where username='$username' and password='$password'")
    or die("failes to query database".mysql_error());
    $row=mysqli_fetch_array($result);
    if($row['username']==$username && $row['password']==$password){
       header("Location:k.php");
    }
    else{
      echo "failed";
    }
?>