<?php

    session_start();
    $con = mysqli_connect("localhost","root","","sampledb");

    $query="select * from mens";

    $result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thumbnails in Bootstrap</title>
    </head>
<style>
body {
  background-image: url('https://cdn.pixabay.com/photo/2015/11/30/13/44/orange-texture-1070357_960_720.jpg');
  
   
  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  
}
</style>
    <body>
	<h1 align="center"><b><u>MEN SHOPPING</u></b></h1><br><br><br><br><br>
        <div class="row">
            <div class="col-sm-4">
                <a href="accessoriesm.php" ><div class="thumbnail">
                        <img src="https://previews.123rf.com/images/stillab/stillab1709/stillab170900006/86050260-still-life-with-men-s-casual-outfits-with-leather-accessories-on-brown-wooden-background-beauty-and-.jpg" alt="" style="width:300px;height:300px;>
                        <div class="caption">
                            <h3>ACCESSORIES</h3>
				
                            
                        
                    </div> 
                </a>
            </div>


            <div class="col-sm-4">
                <a href="clothingm.php" ><div class="thumbnail">
                        <img src="https://scoophub.in/wp-content/uploads/2016/01/mens-clothing-brands.jpg" alt="" style="width:300px;height:300px;>
                        <div class="caption">
                            <h3>CLOTHING</h3>
                            
                        </div>
                    
                </a>
            </div>


            
            </div>
             <table align="center" border="1px" style=" background-color:white; width:600px; line-height:40px;">
            <tr>
                <th><h2 align="center">men avaitable department details</h2></th>
            
            </tr>
            <tr>
                <th><h2>department id</h2><th>
                <th><h2>department name</h2></th>
                <th><h2>category id</h2></th>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
            ?>
                <tr>
                <td><?php echo $rows['departmenti'];?></td>
                <td><?php echo $rows['departmentn'];?></td>
                <td><?php echo $rows['categoryi'];?></td>
             </tr>

            <?php
            }
            ?> 


           
        </table>
        
   </body> 
</html>                                   