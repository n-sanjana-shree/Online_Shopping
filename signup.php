<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panels in Bootstrap</title>
    </head>
    <body background="https://www.newscredit.org/wp-content/uploads/2019/08/istockphoto-868718238-612x612.jpg">
         <p>&nbsp;</p>



  
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
     
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="abcd1.php" >
                                <div class="form-group" >
                                    <input type="text" class="form-control"  placeholder="username" name="username" required = "true">
                                </div>
                                <div class="form-group" >
                                    <input type="text" class="form-control"  placeholder="email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="password" name="password" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="cpassword" name="cpassword" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                
                            </form><br/>

                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="#">Register</a></p></div>
                    </div>
    </div>
                </div>
            </div>
        </div>
    </body>
</html>