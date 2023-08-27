
<?php
  
   session_start();
    
   
   
// Grab User submitted information
    $username = (isset($_POST['username']) ? strip_tags($_POST['username']) : ''); 
    $password = (isset($_POST['password']) ? strip_tags($_POST['password']) : ''); 
    $cpassword = (isset($_POST['cpassword']) ? strip_tags($_POST['cpassword']) : ''); 

// Connect to the database
    $con = mysqli_connect("localhost","root","","sampledb");


    if($password==$cpassword){
    	$query="select * from user where username='$username'";
    	$query_run=mysqli_query($con,$query);
    	if(mysqli_num_rows($query_run)>0){

    		echo '<script type="text/javascript">alert("user already exists...")</script>';

    	}


    	{
    		$query="insert into user values('$username','$password')";
    		$query_run=mysqli_query($con,$query);

    		if($query_run){
    			header("Location:index1.php");
    		}
    		else{
    			echo '<script type="text/javascript">alert("error!!!")</script>';
    		}
    	}
    }
    ?>