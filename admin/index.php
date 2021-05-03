
<!DOCTYPE html>
<html lang="en">
<head>
<style>
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "../images/icon.png" type = "">
    <title>Admin Page</title>

</head>
<body>
    <div class="form">
        <p>Login</p>
        <form method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="save" value="login">
            
        </form>
        </div>
</body>
</html>
<?php
session_start();
include "../templates/connection.php";
if(isset($_POST['save']))
{
    $user_name=$_POST['username'];
    $user_pass=$_POST['password'];

    $check_user="select * from users WHERE user_name='adm' AND password='$user_pass'";

    $run=mysqli_query($con,$check_user);

    if(mysqli_num_rows($run))
    {


        $_SESSION['user_admin']=$user_name;//here session is used and value of $user_email store in $_SESSION.
        header("Location: dashbord.php");

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}

?>
