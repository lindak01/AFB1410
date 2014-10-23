<?php
session_start();
$error='';
include("../images/mum.inc");

if (isset($_POST['submit'])) {
    if(empty($_POST['useremail']) || empty($_POST['password'])) {
        $error="Email or Password is blank.";
    }
    else
    {
        $useremail=$_POST['useremail'];
        $password=$_POST['password'];
        
        $useremail=stripslashes($useremail);
        $password=stripslashes($password);
        $useremail=mysqli_real_escape_string($useremail);
        $password=mysqli_real_escape_string($password);
        
        $connection = mysqli_connect($host,$user,$passwrd) or die("Unable to connect");
        $db = mysqli_select_db($connection,$database) or die("Could not access database");
        $query = mysqli_query("SELECT * FROM members WHERE passwd='$password' AND email='$useremail'", $connection);
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$useremail;
            header("location: mydeals.php");
        } else {
            $error = "Email or Password is invalid";
        }
        mysqli_close($connection);
    }
}
?>