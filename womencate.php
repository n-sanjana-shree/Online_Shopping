<?php

    session_start();
    $con = mysqli_connect("localhost","root","","sampledb");

    $query="select * from prodcat";

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
  background-image: url('https://img1.goodfon.com/wallpaper/nbig/4/6b/tekstura-polosy-temno-siniy.jpg');
  
   
  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  
}
</style>
    <body>
    <h1 style="color:white;"><b><u>NEW TRENDS AVAILABLE AND THE BEST ONE IS WAITING FOR YOU</u></b></h1><br><br><br><br><br><br>
        <div class="row">
            <div class="col-sm-4">
                <a href="womencate.php" ><div class="thumbnail">
                        <img src="https://static.standard.co.uk/s3fs-public/thumbnails/image/2018/08/30/10/onlineshoppingclothing.jpg?w968.jpg alt="">
                        <div class="caption">
                            <h3>WOMEN</h3>
                            
                        </div>
                    </div> 
                </a>
            </div>


            <div class="col-sm-4">
                <a href="mancate.php" ><div class="thumbnail">
                        <img src="https://assets.heart.co.uk/2018/07/men-shopping-1519145680-herowidev4-0.jpg" alt="">
                        <div class="caption">
                            <h3>MEN</h3>
                            
                        </div>
                    </div> 
                </a>
            </div>


            <div class="col-sm-4">
                <a href="kidscate.php" ><div class="thumbnail">
                        <img src="https://www.littlestepsasia.com/sites/default/files/imagecache/article_node_image/article/hero/Top-Online-Kids-Stores-Hong-Kong.png" alt="">
                        <div class="caption">
                            <h3>KIDS</h3>
                            
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <table align="center" border="1px" style=" background-color:white; width:600px; line-height:40px;">
            <tr>
                <th><h2 align="center">category details</h2></th>
            
            </tr>
            <tr>
                <th><h2>category id</h2><th>
                <th><h2>category name</h2></th>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
            ?>
                <tr>
                <td><?php echo $rows['categoryi'];?></td>
                <td><?php echo $rows['categoryn'];?></td>
             </tr>

            <?php
            }
            ?> 


           
        </table>






   </body>
</html>                                    