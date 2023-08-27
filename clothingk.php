<?php
 session_start();
    $con = mysqli_connect("localhost","root","","sampledb");

    $query1="select producti from kidsc";
    $result1=mysqli_query($con,$query1);
    $query2="select productn from kidsc";
    $result2=mysqli_query($con,$query2);
     $query3="select description from kidsc";
    $result3=mysqli_query($con,$query3);
     $query4="select categoryi from kidsc";
    $result4=mysqli_query($con,$query4);
     $query5="select departmenti from kidsc";
    $result5=mysqli_query($con,$query5);
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
  background-image: url('https://static.vecteezy.com/system/resources/previews/000/518/519/non_2x/vector-curve-and-blend-light-pink-abstract-background-010.jpg');
  
   
  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  
}
</style>
    <body>
	<h1 align="center"><b><b><u>CLOTHING FOR KIDS</u></b></b></h1><br><br><br><br><br><a href="oderingall.php">CLICK HERE FOR FINAL ORDER</a>
        <div class="row">
           <div class="column" align="center">
               
                        <img class="img-responsive" src="https://cdn3.volusion.com/upehv.auyze/v/vspfiles/photos/MCCH1-2.jpg?v-cache=1354259150" alt="" align="middle" style="width:400px;height:400px;>
                        <div class="caption">
                          <br><br><div class="panel panel-success" style="width: 500px" >
                           <div class="panel-body" style="width: 500px">
                         <form action="" method="get" id="form1">
                          <div align="center">
      
                        <h3><label>PRODUCT ID:</label><input type="name" value=" <?php
                          $rows=mysqli_fetch_assoc($result1);
                          echo $rows['producti'];
                        ?>" readonly required="" id="Product_id" name="productid" /></h3>


                        
                         </div>
                        <div align="center">
      
                        <h3><label>PRODUCT NAME:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result2);
                          echo $rows['productn'];
                        ?>" readonly required="" id="Name" name="productname" /></h3>
                         </div>
                       <div align="center">
      
                        <h3><label>DESCRIPTION:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result3);
                          echo $rows['description'];
                        ?>" readonly required="" id="Description" name="description" /></h3>
                         </div>
                         <div align="center">
      
                        <h3><label>QUANTITY:</label><input type="number" placeholder="quantity" required="" id="quantity" name="quantity" /></h3>
                         </div>
                          <div align="center">
      
                        <h3><label>CATEGORY ID:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result4);
                          echo $rows['categoryi'];
                        ?>" readonly required="" id="Product_id" name="categoryid" /></h3>
                         </div>
                          <div align="center">
      
                        <h3><label>DEPARTMENT ID:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result5);
                          echo $rows['departmenti'];
                        ?>" readonly required="" id="Product_id" name="departmentid" /></h3>
                         </div>
                         <form action="" method="get" id="form1">
                          <h3>ADD TO CART: <input type="submit" value="Submit"></h3>
                           <h3>DELETE FROM CART: <input type="submit" value="Submit"></h3><br>
                          </form>
                          </div>
                           </div>

                        

				
                            
                        
                   
                
            </div>
            
            <div class="column" align="center">
                 
                        <br><br><br><br><img class="img-responsive" src="https://cdn3.volusion.com/upehv.auyze/v/vspfiles/photos/MCCH1-2.jpg?v-cache=1354259150" alt="" align="middle" style="width:400px;height:400px;>
                        <div class="caption">
                         <br><br><div class="panel panel-success" style="width: 500px" >
                           <div class="panel-body" style="width: 500px">
                         <form action="" method="get" id="form1">
                           <div align="center">
      
                              <h3><label>PRODUCT ID:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result1);
                          echo $rows['producti'];
                        ?>" readonly required="" id="Product_id" name="productid" /></h3>
                               </div>
                              <div align="center">
      
                              <h3><label>PRODUCT NAME:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result2);
                          echo $rows['productn'];
                        ?>" readonly required="" id="Name" name="productname" /></h3>
                             </div>
                            <div align="center">
      
                              <h3><label>DESCRIPTION:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result3);
                          echo $rows['description'];
                        ?>" readonly required="" id="Description" name="description" /></h3>
                             </div>
                             <div align="center">
      
                        <h3><label>QUANTITY:</label><input type="number" placeholder="quantity" required="" id="quantity" name="quantity" /></h3>
                         </div>
                             <div align="center">
      
                              <h3><label>CATEGORY ID:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result4);
                          echo $rows['categoryi'];
                        ?>" readonly required="" id="categoryid" name="categoryid" /></h3>
                               </div>
                               <div align="center">
      
                              <h3><label>DEPARTMENT ID:</label><input type="name" value="<?php
                          $rows=mysqli_fetch_assoc($result5);
                          echo $rows['departmenti'];
                        ?>" readonly required="" id="departmentid" name="departmentid" /></h3>
                               </div>
                               <form action="" method="get" id="form1">
                          <h3>ADD TO CART: <input type="submit" value="Submit"></h3>
                           <h3>DELETE FROM CART: <input type="submit" value="Submit"></h3><br>
                          </form>
                          </div>
                          </div>

                        

				
                            
                        
                    
                
            </div>
            
                
            </div>



           

            
            </div>
        
   </body> 
</html>                                   