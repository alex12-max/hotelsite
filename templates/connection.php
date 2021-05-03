<?php
    $url='localhost';
    $username='root';
    $password='';
    $con=mysqli_connect($url,$username,$password,"hotel");
    if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
