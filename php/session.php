<?php
include('../images/mum.inc');

$connection = mysqli_connect($host,$user,$passwrd) or die("Could not connect.");
$db = mysqli_select_db($connection,$database) or die("Could not access database.");
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query("SELECT email FROM members WHERE email='$user_check'", $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['useremail'];

if(!isset($login_session)){
    mysqli_close($connection);
    header('Location: login_form.php');
}
?>