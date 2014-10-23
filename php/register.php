<?php
include("..images/mum.inc");

$connection = mysqli_connect($host,$user,$passwrd);
$db = mysqli_select_db($connection, $database);
$fname=$_POST['fname1'];
$lname=$_POST['lname1'];
$uname=$_POST['uname1'];
$email=$_POST['email1'];
$password=shal($_POST['password1']);

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid Email";
} else {
    $result = mysqli_query("SELECT * FROM members WHERE email='$email'");
    $data = mysqli_num_rows($result);
    if(($data)==0){
        $query = mysqli_query("insert into members(firstName, lastName, userName, passwd, email) values('$fname','$lname','$uname','$password','$email')");
        if($query){
            echo "You have successfully registered!";
        } else{
            echo "Error!";
        }
    }else {
        echo "This email is already registered, please try another email.";
    }
} mysqli_close($connection);
?>