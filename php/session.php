<?php
include('../images/mum.inc');

$connection = mysql_connect($host, $user, $passwrd);
$db = mysql_select_db($database, $connection);
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("SELECT useremail FROM members WHERE useremail='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['useremail'];

if(!isset($login_session)){
    mysql_close($connection);
    header('Location: login_form.php');
}
?>