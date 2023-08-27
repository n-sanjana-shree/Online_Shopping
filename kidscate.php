<?php

    session_start();
    $con = mysqli_connect("localhost","root","","sampledb");

    $query="select * from kids";

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
  background-image: url('https://static.brusheezy.com/system/resources/previews/000/059/417/non_2x/59417.jpg');
  
   
  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  
}
</style>
    <body>
  <h1 align="center"><b><u>KIDS SHOPPING</u></b></h1><br><br><br><br><br>
        <div class="row">
            <div class="col-sm-4">
                <a href="accessoriesk.php" ><div class="thumbnail">
                        <img src="https://previews.123rf.com/images/denisfilm/denisfilm1711/denisfilm171100246/89188738-beautiful-collection-of-kids-hair-accessories-.jpg" alt="" style="width:300px;height:300px;>
                        <div class="caption">
                            <h3>ACCESSORIES</h3>
        
                            
                        
                    </div> 
                </a>
            </div>


            <div class="col-sm-4">
                <a href="clothingk.php" ><div class="thumbnail">
                        <img src="https://parentology.com/wp-content/uploads/2019/09/best-kids-clothing-boxes-rockets-of-awesome.jpg" alt="" style="width:300px;height:300px;>
                        <div class="caption">
                            <h3>CLOTHING</h3>
                            
                        </div>
                    
                </a>
            </div>


            
            </div>



             <table align="center" border="1px" style=" background-color:white; width:600px; line-height:40px;">
            <tr>
                <th><h2 align="center">kids avaitable department details</h2></th>
            
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