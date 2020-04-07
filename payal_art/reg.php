<html>
    <head>
        <meta charset="utf-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="static/css/reg.css">
    </head>
    <body>
        <form method="POST">
            <div class="well">
                <div class="card-header">Register</div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="firstName" name="fname" class="form-control" placeholder="First name"autofocus="autofocus">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="lastName" name="lname" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="number" id="inputage" name="age" class="form-control" placeholder="Age">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <select type="text" id="inputGender" name="gender" class="form-control" placeholder="Gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
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
                    <button type="submit" class="btn btn-primary btn-block" name="signups-submit">Save</button>         
             </div>
        </form>
    </body>
</html>
<?php
include("includes/connection.php");
if(isset($_POST['signups-submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

$str="INSERT INTO reg(fname,lname,age,gender,email,password) VALUES('$fname','$lname',$age,'$gender','$email',$password)";
$result=mysqli_query($con, $str);
if($result)
{
  header("location:index.php");
}
else
{
  echo "not done";
}
}
?>