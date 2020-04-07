<html>
    <head>
        <meta charset="utf-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="static/css/public_styling.css">
    </head>
    <body>
        <form method="POST">
            <div class="well">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email Address">
                    </div>
                  </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <button class="btn btn-primary btn-block" name="login-submit">Log In</button>         
            </div>
        </form>
    </body>
</html>

<?php
include("includes/connection.php");

if(isset($_POST['login-submit']))
{
 $email=$_POST['email'];
 $password=$_POST['password'];

 $str="SELECT * FROM reg WHERE password='$password'";
 $result=mysqli_query($con, $str);
 $row=mysqli_fetch_array($result);

 if($row['email'] == $email && $row['password'] == $password)
 {
    header("location:dash.php");
 }
 else
 {
    echo "not match";
 }

}
?>