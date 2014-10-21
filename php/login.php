<?php
session_start();
$error='';
include("../images/mum.inc");

if (isset($_POST['submit'])) {
    if(empty($_POST['useremail']) || empty($_POST['password'])) {
        $error="Email or Password is invalid.";
    }
    else
    {
        $useremail=$_POST['useremail'];
        $password=$_POST['password'];
        
        $useremail=stripslashes($useremail);
        $password=stripslashes($password);
        $useremail=mysql_real_escape_string($useremail);
        $password=mysql_real_escape_string($password);
        
        $connection = mysql_connect($host, $user, $passwrd);
        $db = mysql_select_db($database, $connection);
        $query = mysql_query("SELECT * from members WHERE password='$password' AND useremail='$useremail'", $connection);
        $rows = mysql_num_rows($query);
        
        if ($rows == 1) {
            $_SESSION['login_user']=$useremail;
            header("location: mydeals.php");
        } else {
            $error = "Email or Password is invalid";
        }
        mysql_close($connection);
    }
}
?>