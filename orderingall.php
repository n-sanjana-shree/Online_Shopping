<?php

    session_start();
    $con = mysqli_connect("localhost","root","","sampledb");

     $query="select * from ordering";

    $result=mysqli_query($con,$query);
?>


<html>
<head>
    <title></title>
</head>
<body style="background-image:url('https://img.freepik.com/free-vector/yellow-background-with-dynamic-abstract-shapes_1393-144.jpg?size=626&ext=jpg')";>
    <h3 align="center">ORDERING</h3>
    <table align="center" border="1px" style=" background-color:white; width:600px; line-height:40px;">
            <tr>
                <th><h2 align="center">DEAR CUSTOMER YOUR ORDER DETAILS:</h2></th>
            
            </tr>
            <tr>
                <td><h2>order number</h2><td>
                <td><h2>category id</h2></td>
                <td><h2>department id</h2></td>
                <td><h2>payment</h2></td>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
            ?>
                <tr>
                    <td><?php echo $rows['ordern'];?></td>
                    <td><?php echo $rows['categoryi'];?></td>
                    <td><?php echo $rows['departmenti'];?></td>
                    <td><?php echo $rows['payment'];?></td>
                </tr>

            <?php
            }
            ?> 

             <form action="logout.php" method="get" id="form1">
                          <h3>CLICK HERE TO LOGOUT<input type="submit" value="Submit"></h3>
                           
                          </form>


           
        </table>
    </body>
</html>

    
